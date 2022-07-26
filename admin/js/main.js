// Admin Event Page


let upButton = document.querySelector('.upButton');
let pastButton = document.querySelector('.pastButton');

function active(act,deact,display){
    act.style.cssText += 'border-radius:0;border-top-left-radius: 10px;border-top-right-radius: 10px;background-color: #D9D9D9;';
    deact.style.cssText += 'border-radius: 0px;background-color: #fff;';
}
active(upButton,pastButton,'none')


upButton.addEventListener('click',()=>{
    active(upButton,pastButton,'none');
})

pastButton.addEventListener('click',()=>{
    active(pastButton,upButton,'block');
})

let infoHidden = document.querySelector('.setInfo');
let info = document.querySelector('.hiddenText')

infoHidden.addEventListener('mouseover',()=>{
	info.style.display = "block";
	setTimeout(()=>{info.style.display = "none"},1000)
})

function isInTheFuture(date) {
	const today = new Date();
	// today.setHours(23, 59, 59, 998);
	today.setDate(today.getDate() + 1)
	return date > today;
  }

console.log(isInTheFuture(new Date('2021-01-25')));
//validating date
let neDate = document.querySelector('.neDate')
let neButton = document.querySelector('.neButton')
neButton.addEventListener('click',()=>{
	let date = neDate.value;
	let mon = neDate.nextElementSibling.value;
	let year = neDate.nextElementSibling.nextElementSibling.value;
	if(!isInTheFuture(new Date(`${year}-${mon}-${date}`))){
		alert('Enter Correct Date')
	}
})

// chart

(function(){
	var root = this,
		Chart = root.Chart,
		helpers = Chart.helpers;

	Chart.Type.extend({
		name: "MultiLevelPie",
		defaults: {
			// Boolean - Whether we should show a stroke on each segment
			segmentShowStroke : true,

			// String - The colour of each segment stroke
			segmentStrokeColor : "#fff",

			// Number - The width of each segment stroke
			segmentStrokeWidth : 1,

			// Number - Width of each segment
			segmentWidth: 40,

			// String - Default highlight for segments
			segmentHighlight: "#dadada",

			// Number - Start angle in radians
			startAngle: Math.PI * 1.5,

			// Number - Maximum number of children to show before halting
			maxChildren: 150
		},

		initialize: function(data){

			this.SegmentArc = Chart.Arc.extend({
				ctx : this.chart.ctx,
				x : this.chart.width/2,
				y : this.chart.height/2
			});

			this.calculateTotal(data);

			this.segments = [];
			this.all_segments = [];

			helpers.each(data, function(node){
				this.addSegments(node, 0, this.segments);
			}, this);

			// Set up tooltip events on the chart
			// if (this.options.showTooltips){
			if (true){
				helpers.bindEvents(this, this.options.tooltipEvents, function(evt){
					var activeSegments = (evt.type !== 'mouseout') ? this.getSegmentsAtEvent(evt) : [];

					helpers.each(this.all_segments,function(segment){
						segment.restore(["fillColor"]);
					});
					helpers.each(activeSegments,function(activeSegment){
						activeSegment.fillColor = activeSegment.highlightColor;
					});
					this.showTooltip(activeSegments);
				});
			}

			this.render();

		},
		getSegmentsAtEvent : function(e){
			var segmentsArray = [];

			var location = helpers.getRelativePosition(e);

			helpers.each(this.all_segments,function(segment){
				if (segment.inRange(location.x,location.y)) segmentsArray.push(segment);
			},this);
			return segmentsArray;
		},
		addSegments: function(segmentData, depth, collection){

			var innerRadius = depth * this.options.segmentWidth,
				outerRadius = innerRadius + this.options.segmentWidth;

			if (segmentData.children && segmentData.children.length == 1) {
				this.addSegments(segmentData.children[0], depth, collection);
			} else {
				var segment = new this.SegmentArc({
					value : segmentData.value,
					outerRadius : outerRadius,
					innerRadius : innerRadius,
					fillColor : segmentData.color,
					highlightColor : segmentData.highlight || this.options.segmentHighlight || segmentData.color,
					showStroke : this.options.segmentShowStroke,
					strokeWidth : this.options.segmentStrokeWidth,
					strokeColor : this.options.segmentStrokeColor,
					startAngle : this.options.startAngle,
					circumference : (this.options.animation) ? 0 : this.calculateCircumference(segmentData.value),
					label : segmentData.label,
					children: []
				});

				this.all_segments.push(segment);
				collection.push(segment);

				if (segmentData.children) {
					if (segmentData.children.length <= this.options.maxChildren) {
						helpers.each(segmentData.children, function(childData){
							this.addSegments(childData, depth + 1, segment.children);
						}, this);
					}
				}
			}
		},
		calculateCircumference: function(value){
			return (value / this.total) * (Math.PI * 2);
		},
		calculateTotal : function(data){
			this.total = 0;
			helpers.each(data, function(segment){
				this.total += segment.value;
			}, this);
		},
		reflow: function(){
			helpers.extend(this.SegmentArc.prototype, {
				x: this.chart.width / 2,
				y: this.chart.height / 2,
			});
		},
		draw: function(easeDecimal){

			var animDecimal = (easeDecimal) ? easeDecimal : 1;

			this.clear();

			var prev = {endAngle: this.options.startAngle};
			helpers.each(this.segments, function(segment, index){
				this.drawSegment(segment, prev, animDecimal);
				prev = segment;
			}, this);
		},
		drawSegment: function(segment, previousSegment, animDecimal){
			segment.transition({
				circumference : this.calculateCircumference(segment.value)
			}, animDecimal);

			segment.startAngle = previousSegment.endAngle;

			segment.endAngle = segment.startAngle + segment.circumference;
			segment.draw();

			if (segment.children){
				var prev = {
					endAngle: segment.startAngle
				};

				helpers.each(segment.children, function(child, index){
					this.drawSegment(child, prev, animDecimal);
					prev = child;
				}, this);
			}

			return segment;
		}
	});

}).call(this);
