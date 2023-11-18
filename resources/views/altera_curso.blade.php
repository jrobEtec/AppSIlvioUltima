@include('padrao')
@section('conteudo')
 
 <!-- ========== title-wrapper end ========== -->

 
     

     <div class="col">
         <div class="card-style settings-card-2 mb-30">
             <div class="title mb-30">
                 <h6>Cursos</h6>
             </div>
             <form method="post" action="{{route('alterar-banco-curso',$registrosCurso->id)}}">
                @method('put')
                @csrf
                 <div class="row">

                 <div class="input-style-1">
                             <label>Id Categoria</label>
                             <input type="text" name="idcategoria" value="{{$registrosCurso->idcategoria}}"/>
                         </div>

                     <div class="col-12">
                        <div class="input-style-1">
                             <label>Nome</label>
                             <input type="text" name="nomecurso" value="{{$registrosCurso->nomecurso}}" />
                         </div>
                     </div>
                     <div class="col-12">
                         <div class="input-style-1">
                             <label>Carga Horária</label>
                             <input type="text" name="cargahoraria" value="{{$registrosCurso->cargahoraria}}" />
                         </div>
                     </div>
                     <div class="col-12">
                         <div class="input-style-1">
                             <label>Valor</label>
                             <input type="text" name="valor" value="{{$registrosCurso->valor}}" />
                         </div>
                     </div>
                     
                     <div class="col-12">
                         <button class="main-btn primary-btn btn-hover">
                             Alterar curso
                         </button>
                     </div>
                 </div>
             </form>
         </div>
         <!-- end card -->
     </div>
     <!-- end col -->
 </div>
 <!-- end row -->
 </div>
 <!-- end container -->
 </section>
 <!-- ========== section end ========== -->