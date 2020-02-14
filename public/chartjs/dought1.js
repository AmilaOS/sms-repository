 


	
function done(){

<<<<<<< HEAD
  var url1=myLine.toBase64Image();
  document.getElementById("url1").src=url1;
=======
  var url=myLine1.toBase64Image();
  document.getElementById("url1").src=url;
  myLine1.clear();

  var block = url.split(";");
  // Get the content type
  var contentType = block[0].split(":")[1];// In this case "image/gif"
  // get the real base64 content of the file
  var realData = block[1].split(",")[1];// In this case "iVBORw0KGg...."

  // Convert to blob
  var blob = b64toBlob(realData, contentType);
  console.log("xxxx"+blob);
>>>>>>> fbf6e90a12fec0b2fd33133b8b4e3b2db169ed89
}

	

var myLine1 =new Chart(document.getElementById("doughnut-chart1"), {
														    type: 'doughnut',
														    data: {
														      labels: ["%Achivement", "%not achived"],
														      datasets: [
														        {
														          label: "Target VS Achievement",
														          backgroundColor: ["#3e95cd","#8e5ea2"],
														          data: [58,42]
														        }
														      ]
														    },


															options : {
																legend : {
																	display : false
																},
																title : {
																	display : true,
																	text : 'SFP Revenue Per Head'
																},
																bezierCurve : false,
																  animation: {
																	    onComplete: done
																	  }
															}
														});

function b64toBlob(b64Data, contentType, sliceSize) {
    contentType = contentType || '';
    sliceSize = sliceSize || 512;

    var byteCharacters = atob(b64Data);
    var byteArrays = [];

    for (var offset = 0; offset < byteCharacters.length; offset += sliceSize) {
        var slice = byteCharacters.slice(offset, offset + sliceSize);

        var byteNumbers = new Array(slice.length);
        for (var i = 0; i < slice.length; i++) {
            byteNumbers[i] = slice.charCodeAt(i);
        }

        var byteArray = new Uint8Array(byteNumbers);

        byteArrays.push(byteArray);
    }

  var blob = new Blob(byteArrays, {type: contentType});
  return blob;
}
														   