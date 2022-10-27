$("#download").click(function () {
  html2canvas($("#lab"), {
    onrendered: function (canvas) {
      var data = canvas.toDataURL();
      var docDefinition = {
        content: [
          {
            image: data,
            width: 500,
          },
        ],
      };
      pdfMake.createPdf(docDefinition).download("patienthistory.pdf");
    },
  });
});
