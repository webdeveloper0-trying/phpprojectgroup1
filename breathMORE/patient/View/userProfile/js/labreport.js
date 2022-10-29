$("#downloadLabReport").click(function () {
  html2canvas($("#labReport"), {
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
      pdfMake.createPdf(docDefinition).download("labreport.pdf");
    },
  });
});
