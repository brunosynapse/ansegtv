CKFinder.config( { connectorPath: '/ckfinder/connector' } );
ClassicEditor
    .create( document.querySelector( '#editor' ),
        {
            language: 'pt-br',
            ckfinder: {
                uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',
            },
            toolbar: [ 'ckfinder', 'video', '|', 'heading', '|', 'bold', 'italic', '|', 'undo', 'redo' ]
        }
    ).then( editor => {
    editor.ui.view.editable.element.style.height = '300px';
})
    .catch( error => {
        console.error( error );
    });
