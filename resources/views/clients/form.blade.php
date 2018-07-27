		  <div class="form-group">
		    <label for="exampleInputName1">Nome</label>
		    <input type="name" class="form-control" name="nome" id="nameinput" placeholder="Nome" value="{{ @$client->name }}">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input type="email" class="form-control" name="email" id="emailinput" aria-describedby="emailHelp" placeholder="Enter email" value="{{ @$client->email }}">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputAge1">Idade</label>
		    <input type="number" class="form-control" name="age" id="ageinput" placeholder="Idade" value="{{ @$client->age }}">
		  </div>
		  <button type="submit" class="btn btn-primary">Salvar</button>
		  <a href="{{ route('clients.index')}}" class='btn btn-primary'>Voltar</a>