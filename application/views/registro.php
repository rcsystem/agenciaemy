<!-- =============================================================================
// vista de registro de Edecanes y Empresas
//Creado por:
// rafael cruz aguilar rafael_cruz_aguilar@hotmail.com
// ============================================================================= -->

<section>

<div class="content-reg">
<div class="col-lg-12">
        <div class="titulo-registro">
        <center> <h1>Registra tu cuenta</h1> </center>
        </div>

        <div class="row">
                <div class="col-lg-6">
                      <center>   <img src="<?php echo base_url(); ?>assets/images/trabajoedecan.png" alt=""> </center>
                </div>


                <div class="col-lg-6">
                
                <div class="col-lg-12">
                <div class="form-group">
                <label for="tipo-cuenta">Selecciona tu tipo de cuenta</label>
                    <select name="tipo-cuenta" id="tipo-cuenta" class="form-control">
                    <option value="#">Selecionar</option>
                    <option value="1">
                    Edecan
                    </option>
                    <option value="2">
                    Cliente
                    </option>
                    </select>
                    </div>
                </div>

                    <form action="">

                    <div class="col-lg-12">
                    <div class="row">
                            <div class="col-lg-6">
                            <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nombre (s)"/>
                            </div>
                            </div>
                            
                            <div class="col-lg-6">
                            <div class="form-group">
                            <input type="text" class="form-control" placeholder="Apellido"/>
                            </div>
                            </div>

                        </div>

                    </div>

                   
                   
                    <div class="col-lg-12">

                   
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="E-mail"/>
                    </div>
                    
                   
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Password"/>
                    </div>
                   
                    <div class="row">
                     <div class="col-lg-6">
                        <div class="form-group">
                        <input type="text" class="form-control" placeholder="Teléfono"/>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                        <input type="text" class="form-control" placeholder="Movil"/>
                        </div>
                    </div>
                    </div>
                   

                    

                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Dirección"/>
                    </div>

                     <div class="form-group">
                        <label class="radio-inline">
                            <input type="radio" name="optradio"> Mujer
                            </label>

                        <label class="radio-inline">
                            <input type="radio" name="optradio"> Hombre
                        </label>
                    </div>

         </div>

                  

                     <div class="btn-registro">
                         <input type="submit" class="btn btn-block btn-default btn-reg" value="Crear una cuenta">
                     </div>
                    
                    </form>

                </div>
        </div>
</div>


</div>

</section>