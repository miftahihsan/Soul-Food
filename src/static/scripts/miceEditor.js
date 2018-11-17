tinymce.init({
    selector: 'textarea',
    menubar : false,
    branding : false,
    browser_spellcheck: true,
    contextmenu: false,
    plugins: "wordcount textcolor",
    wordcount_cleanregex: /[0-9.(),;:!?%#$?\x27\x22_+=\\\/\-]*/g,
    image_caption: true,
});



// tinymce.activeEditor.uploadImages(function(success) {
//    document.forms[0].submit();
// });
