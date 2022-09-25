const userName = document.getElementById("user_full_name").textContent;
const eventName = document.getElementById("event_name").textContent;
const eventDate = document.getElementById("event_date").textContent;
const { PDFDocument, rgb, degrees } = PDFLib;


// const capitalize = (str, lower = false) =>
//   (lower ? str.toLowerCase() : str).replace(/(?:^|\s|["'([{])+\S/g, (match) =>
//     match.toUpperCase()
//   );

// submitBtn.addEventListener("click", () => {
//   const val = capitalize(userName.value);

//   check if the text is empty or not
//   if (val.trim() !== "" && userName.checkValidity()) {
//     console.log(val);
//     generatePDF(val);
//   } else {
//     userName.reportValidity();
//   }
// });

const generatePDF = async (userName, eventName, eventDate) => {
  const existingPdfBytes = await fetch("../database/certificate.pdf").then((res) =>
    res.arrayBuffer()
  );

  // Load a PDFDocument from the existing PDF bytes
  const pdfDoc = await PDFDocument.load(existingPdfBytes);
  pdfDoc.registerFontkit(fontkit);

  //get font
  const fontBytes = await fetch("../AdditionalFonts/Livvic-Bold.ttf").then((res) =>
    res.arrayBuffer()
  );
  const fontBytes1 = await fetch("../AdditionalFonts/Poppins-Medium.ttf").then((res) =>
    res.arrayBuffer()
  );

  // Embed our custom font in the document
  const LivvicFont = await pdfDoc.embedFont(fontBytes);
  const PoppinsFont = await pdfDoc.embedFont(fontBytes1);

  // Get the first page of the document
  const pages = pdfDoc.getPages();
  const firstPage = pages[0];

  // Draw a string of text diagonally across the first page
  firstPage.drawText(userName, {
    x: 55,
    y: 275,
    size: 50,
    font: LivvicFont,
    color: rgb(0.2, 0.51, 0.82),
  });
  firstPage.drawText(eventName, {
    x: 320,
    y: 238,
    size: 20,
    font: PoppinsFont,
  });
  firstPage.drawText(eventDate, {
    x: 220,
    y: 215,
    size: 20,
    font: PoppinsFont,
  });

  // Serialize the PDFDocument to bytes (a Uint8Array)
  const pdfBytes = await pdfDoc.save();
  console.log("Done creating");

  // this was for creating uri and showing in iframe

  // const pdfDataUri = await pdfDoc.saveAsBase64({ dataUri: true });
  // document.getElementById("pdf").src = pdfDataUri;

  var file = new File(
    [pdfBytes],
    ""+eventName+" Certificate | "+userName+".pdf",
    {
      type: "application/pdf;charset=utf-8",
    }
  );
 saveAs(file);
};

// init();
generatePDF(userName, eventName, eventDate);