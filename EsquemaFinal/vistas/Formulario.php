<?php include('header.php'); ?>
<?php include('BarraNavegacion.php'); ?>
<div class="container">
    <div class="margin-top">
 
        <div class="details" align="center" >FORMULARIO DE REGISTRO <?php echo "<br>" ?> Ingrese los siguientes Datos</div>		
        <form class="form-horizontal" method="POST"  action="save.php" enctype="multipart/form-data">
<table>
        <table align="center" border="0">
            <tr>
                <?php $variable= $_GET["identificador"];?>
                <td class="registr">No. Documento:</td>                                                   
                <td class="registr"><input type="text" name="dni_user"  autocomplete="off" maxlength="11" value="<?php echo $variable ;?>" readonly="readonly"></td>
                <td class="registr">Tipo de documento:</td>
                <td class="registr"><select name="tipodni_user" >
                        <option value="">Seleccione</option>
                        <option value="Cedula Ciudadania">CC</option>
                        <option value="Tarjeta Identidad">TI</option>
                        <option value="Cedula Extranjera">CE</option> 
                    </select>
                </td>
            </tr>
            <tr>
                <td class="registr"></td>
                <td class="registr"><input type="hidden" name="foto_user" title="foto" value="estudiante.png"></td>
            </tr>
            <tr>
                <td class="registr">Nombre(s):</td>
                <td class="registr"><input type="text" name="nom_user" title="nombre" required></td>
                <td class="registr">Apellido(s):</td>
                <td class="registr"><input type="text" name="apell_user" title="apellido"required ></td>
            </tr>
            <tr>  
                <td class="registr">Sexo</td>
                <td class="registr"><select name="sex_user" id="tipodni_user">
                        <option value="">Seleccione</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="registr">Correo</td>
                <td class="registr"><input type="email" name="mail_user" title="correo electronico de contacto" required></td>

                <td class="registr">Clave</td>
                <td class="registr"><input type="hidden" name="clave_user" title="clavde de Ingreso"></td>
            </tr>      

            <tr>
                <td class="registr">Telefono Usuario</td>
                <td class="registr"><input type="number"  name="tel_user"  placeholder="3133556565" title="Telefono de Contacto" required></td>
                <td class="registr">Estado Civil</td>
                <td class="registr"><select name="civil_user" id="civil_user" >
                        <option value="">Seleccione</option>
                        <option value="Solter@">Solter@</option>
                        <option value="union_Libre">Union_Libre</option>
                        <option value="Comprometid@">Comprometid@</option>
                        <option value="Casad@">Casad@</option>
                        <option value="Divorciad@">Divorciad@</option>
                    </select>
                </td>


            </tr>


            <tr>
                <td class="registr">Lugar Nacimiento:</td>
                <td class="registr"><input type="text" name="lugarnac_user" title="¿Donde nacio?" required=""></td>
            </tr><tr>
                <td class="registr">Fecha Nacimiento:</td>
                <td class="registr">
                    <input type="date" name="nac_user" required></td>
            </tr>

            <tr>
                <td class="registr">Localidad:</td>
                <td class="registr"><select  name="localidad_user" >
                        <option></option>
                        <option value="1.Usaquen" >1.Usaquen</option>
                        <option value="2. Chapinero" >2. Chapinero</option>
                        <option value="3.Santafe" >3.Santa fe</option>
                        <option value="4. San Cristobal" >4.San Cristobal</option>
                        <option value="5. Usme" >5.Usme</option>                <option value="6. Tunjuelito" >6. Tunjuelito</option>
                        <option value="7. Bosa" >7. Bosa</option>             <option value="8. Kennedy" >8. Kenendy</option>
                        <option value="9. Fontibon" >9. Fontibon</option>
                        <option value="10. Engativa" >10. Engativa</option>         <option value="11. Suba" >11.Suba</option>
                        <option value="12. B. Unidos" >12.B. Unidos</option>
                        <option value="13. Teusaquillo" >13. Teusaquillo</option>     <option value="14. Martires" >14. Martires</option>     <option value="15 Antonio Nariño" >15. Antonio Nariño</option>
                        <option value="16. Puente Aranda" >16. Puente Aranda</option>    <option value="17. Candelaria" >17. La Candelaria</option>  <option value="18 R. uribe uribe" >18. R. uribe uribe</option>
                        <option value="19 C. bolivar" >19. ciudad Bolivar</option>    <option value="20. Sumapaz" >20. Sumapaz</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="registr">Estrato:</td>
                <td class="registr"><input type="number" min="1" max="6" value="0" name="estrato_user" title="estrato de Vivienda" required ></td>
            </tr>
            <tr>
                <td class="registr">Barrio:</td>
                <td class="registr"><input type="text" name="barrio_user" title="barrio" ></td>

            </tr>

               <tr>

                <td class="registr">Acudiente Nombre</td>
                <td class="registr"><input type="text" name="responsable_user" title=" Nombre" ></td>
               </tr>
               <tr>
                   
                <td class="registr">Cel acudiente</td>
                <td class="registr"><input type="text" name="cel_respon_user" title="Telefono de Contacto" ></td>

            </tr>

            

            <input type="hidden" name="fecha_registro_user" title="Fecha de registro ">
            <input type="hidden" name="carrera_user" title=" Carrera"  >
            <input type="hidden" name="universidad_user" title="Universidad " >


            
            <tr>

                <td class="registr">Tipo Colegio</td>
                <td>
                    <select name="id_colegio" id="id_colegio">
                        <option value="">Seleccione Colegio</option>
                        <?php
                        include("../3modelo/conexion.php");
                        $consulta1 = mysql_query("select *from t_colegio");
                        while ($row = mysql_fetch_array($consulta1)) {
                            echo '<option value="' . $row['id_colegio'] . '">' . $row['tipo_colegio'] . '</option>';
                        }
                        ?></select>
                </td>
            </tr>


            <tr>

                <td class="registr">Estado Usuario</td>
                <td class="registr">
                    <select name="id_estado" id="id_colegio" >
                        <option value="1">Activado </option>
                        </select>
                </td>

                <td class="registr">Jornada </td>
                <td class="registr">
                    <select name="id_jornada" id="id_colegio">
                        <option value="">Seleccione </option>
                        <?php
                        include("../3modelo/conexion.php");
                        $consulta3 = mysql_query("select *from t_jornada");
                        while ($row = mysql_fetch_array($consulta3)) {
                            echo '<option value="' . $row['id_jornada'] . '">' . $row['tipo_jornada'] . '</option>';
                        }
                        ?></select>


                </td>
            </tr><br>
         <tr>
<th colspan="2" aling="center"> 
<h4>..::Adjuntar Documento::..</h4>
	<input type="file" name="archivo_usuario"  required/><br/>
</th>
</tr>
            <tr>
                <td class="registr"> </td>
                <td class="registr">
                    <input name="id_materia_user" id="id_colegio" value="0" type="hidden">
                                     </td>
            </tr> <tr>
                <td class="registr"> </td>
                <td class="registr">
                    <input name="rol_user" id="Rolusuario" value="3" type="hidden">
                                      </td>


            </tr>
<tr><br>
  <td colspan="4" align="center" class="registr"> 
   <button name="submit" type="submit" class="btn btn-success" ><i class="icon-save icon-large"></i>&nbsp;Registrar Información Personal</button>

    </td>
    </tr>
        </table>
    
    
    
    
    
    
    
    
    
    
    
    
    </form>
    <br><br>

</div>

        
        

    </div>
</div>

<?php include('footer.php') ?>
