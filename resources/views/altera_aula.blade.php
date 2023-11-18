@include('padrao')
@section('conteudo')
 
 <!-- ========== title-wrapper end ========== -->

 
     

     <div class="col">
         <div class="card-style settings-card-2 mb-30">
             <div class="title mb-30">
                 <h6>Aulas</h6>
             </div>
             <form method="post" action="{{route('alterar-banco-aula',$registrosAula->id)}}">
                @method('put')
                @csrf
                 <div class="row">

                     <div class="col-12">
                        <div class="input-style-1">
                             <label>Id curso</label>
                             <input type="text" name="idcurso" value="{{$registrosAula->idcurso}}"/>
                         </div>
                     </div>
                     <div class="col-12">
                         <div class="input-style-1">
                             <label>Nome da aula</label>
                             <input type="text" name="tituloaula"  value="{{$registrosAula->tituloaula}}"/>
                         </div>
                     </div>
                     <div class="col-12">
                         <div class="input-style-1">
                             <label>urlaula</label>
                             <input type="text" name="urlaula"  value="{{$registrosAula->urlaula}}" />
                         </div>
                     </div>
                     
                     <div class="col-12">
                         <button class="main-btn primary-btn btn-hover">
                             Alterar Aula
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