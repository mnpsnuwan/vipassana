   $(document).ready(function(){           
    $('#ajxbtn').click(function (){    
          		 							
            var postdataN = $('#nic1').val(); 
          //  var postdataE = $('#email').val();
            
         //alert(postdataN); 
        // alert(postdataE);
         
                 $.ajax({   
                     
                type: 'POST',
                url: 'RegAjaxGetData.php',          
               // dataType: 'text',
               // dataType: 'html',
                dataType: 'json',
            //    dataType: 'jsonp',
            // contentType: "application/json",
                data:{udataN:postdataN },						
                                    
          success: function (response) {
               //       response = eval(response);   
                        alert(response);                         
                         alert("You won.....!");
                         alert(response[1]['email2']);
                        var trHTML = '';
                  
                       $.each(response, function (j,item){
                                      
           // trHTML += '<tr><td>' + (j+1) + '</td><td>' + item.RegNo + '</td><td>'+ item.nic2 + '</td><td>' + item.address1 + " " + "  " + item.address2 +'</td><td>'+ item.gender + '</td><td>' + item.fname + " " + "  " + item.lname + '</td><td>' + item.phone + '</td></tr>' ; 
            trHTML += '<tr><td>' + item.RegNo + '</td><td>'+ item.nic2 + '</td><td>' + item.address1 + " " + "  " + item.address2 +'</td><td>'+ item.gender + '</td><td>' + item.fname + " " + "  " + item.lname + '</td><td>' + item.phone + '</td></tr>' ; 

}); 
				$('#reg_table').append(trHTML);
                                
                           //    alert(response[11]);
                                // json objct convert to strinh and it;s first element...
                            //   var jsonStr = JSON.stringify(response[0]['email2']);
                            //    $('#email').html(jsonStr);
                            
                            var success =  $($.parseHTML(response)).filter("#email"); 
                                console.log(success);
                                               
                
          
          
          },
                   error: function (XMLHttpRequest, textStatus, errorThrown) {                    
 /*This code is working, but can't undestand*/  //  alert("XMLHttpRequest:\n" + XMLHttpRequest[0]);alert(" errorThrown: " + errorThrown);alert( " textstatus:\n" + textStatus);
                       
                         alert( XMLHttpRequest.responseText);  //(meya magin php code ekehi errors laba gatha hakiya)
                         alert("No Data");
                     } 
              
                     
                     
                    });               
            });
        });

