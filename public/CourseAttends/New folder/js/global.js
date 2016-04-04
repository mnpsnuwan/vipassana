$('input#name-save').on('click', function(){
    var name = $('input#element_5_2').val();         
  
    if($.trim(name) == ''){
        alert('empty.......!!');
    }
    else if($.trim(name) != ''){
       //alert(data);  
      $.post( 'createCourse - Copy.php',{element_5_2: name}, function(data) {$('div#name-data').text(data);  });         
    }
});