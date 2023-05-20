<div>
   <h1>Crear artículo</h1><br>
    <form wire:submit.prevent="save">
        <label><input wire:model="title" type="text" placeholder="Título"></label>
        <label><textarea wire:model="content" placeholder="Contenido"></textarea></label>
        <input type="submit" value="Guardar">        
    </form>
</div>

{{-- conectar campos de entrada con datos del componente --}}

{{-- como hacemos para escuchar cuando el usuario envie este formualrio
    para ello tenemos la directiva wire:submit que va aescuchar el evento submit
    del formulario y con el modificador prevent evitamos que realmente se envie el formulario 
    y se vuelva a cargar la pagina que seria el comportamiento por defecto
    Ahora lo que recibe como valor esta directiva se le conoce como una accion
    que accion queremos que se realice cuando el usuario envie el formulario

    al enviar este formulario se va aintentar ejecutar la accion o el metodo
    publico llamado save() que debe estar disponible en la clase del componente
    en nustro caso ArticleForm

    al igual que las propiedades es importante que el metodo sea publico 
    para que pueda ser ejecutado desde la vista de esa forma cuando 
    se envie el formulario se ejecutara el metodo save() algo que es 
    genial porque estamos evitando la definición de la ruta y el 
    controlador que procese este formulario, todo el flujo se reduce a estos dos archivos
    
    
    --}}
