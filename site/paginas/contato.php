<div class="container p-4">

    <h1>Envie uma mensagem: </h1>
    <form action="?pg=contato-inserir" method="POST">                            

        <div class="card-body">
            <div class="form-group">
                <label for="nome">Nome: </label>
                <input type="text" name="nome" value="" class="form-control" id="nome">
            </div>                                    
            <div class="form-group">
                <label for="tipo">email: </label>
                <input type="email" value="" name="email" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="valor">Mensagem: </label>
                <input type="text" value="" name="msg" class="form-control" id="msg">
            </div>
            <input type="hidden" value="" name="id">
        </div>
        <!-- /.card-body -->        
    </form>
</div>