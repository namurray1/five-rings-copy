// JavaScript Document
'use strict';
// Remember set you events before call bootstrapSwitch or they will fire after bootstrapSwitch's events
$('#after').bootstrapNumber();
$('#colorful').bootstrapNumber({
upClass: 'success',
downClass: 'danger'
});

$('#after-2').bootstrapNumber();
$('#colorful-2').bootstrapNumber({
upClass: 'success',
downClass: 'danger'
});