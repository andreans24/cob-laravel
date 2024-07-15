let theEditor;

ClassicEditor.create(document.querySelector("#editorDetails"),{
    ckfinder:{
        uploadUrl:
        "/ckfinder/core/connector/php/connector.php?commandQuickUploadtype=Files&responseType=json",
    },
    mediaEmbed:{
        previewsInData: true,
    },
})
    .then((editor) => {
        theEditor = editor;
    })
    .catch((error) => {
        console.error(error);
    });

    function getDataFormTheEditor() {
        return theEditor.getData();
    }