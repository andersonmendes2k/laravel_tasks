		<div class="form-group">
		    <label for="name" class="col-sm-2 control-label">Nome</label>
		    <div class="col-sm-10">
		        <input type="text" class="form-control" id="name" name="name" placeholder="Nome" value="{{ @$project->name }}">
		    </div>
		</div>
		<div class="form-group">
		    <label for="cost" class="col-sm-2 control-label">Custo</label>
		    <div class="col-sm-10">
		    <input type="text" class="form-control" id="cost" name="cost" placeholder="Custo" value="{{ @$project->cost }}">
		    </div>
		</div>
		<div class="form-group">
		    <label for="cost" class="col-sm-2 control-label">client_id</label>
		    <div class="col-sm-10">
		    <input type="text" class="form-control" id="client_id" name="client_id" placeholder="client_id" value="{{ @$project->client_id }}">
		    </div>
		</div>
		<div class="form-group">
		    <label for="description" class="col-sm-2 control-label">Descrição</label>
		    <div class="col-sm-10">
		        <textarea class="form-control" id="description" name="description" placeholder="Descrição">{{ @$project->description }}</textarea>
		    </div>
		</div>
		  <button type="submit" class="btn btn-dark" style="margin-top: 20px; margin-right: 10px">Salvar</button>
		  <a href="{{ route('projects.index')}}" class='btn btn-danger' style="margin-top: 20px; margin-right: 10px">Cancelar</a>