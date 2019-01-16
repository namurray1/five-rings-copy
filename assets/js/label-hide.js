// JavaScript Document

$("#input-1").blur(function(){
if($(this).val() == '')
$("#input-1-label").attr("style", "visibility: ")    
else
$("#input-1-label").attr("style", "visibility: hidden")

});

$("#input-2").blur(function(){
if($(this).val() == '')
$("#input-2-label").attr("style", "visibility: ")    
else
$("#input-2-label").attr("style", "visibility: hidden")

});


$("#input-3").blur(function(){
if($(this).val() == '')
$("#input-3-label").attr("style", "visibility: ")    
else
$("#input-3-label").attr("style", "visibility: hidden")

});