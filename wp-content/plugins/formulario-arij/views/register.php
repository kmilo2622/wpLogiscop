<div class="exclaimer">
    <div class="col-sm-2" align="center">
        <h4><strong>Información</strong></h4>
        <br>
    </div>
    <div class="col-sm-9">
        Registrate sólo si estás seguro (a) de afiliarte con tus beneficiarios a la seguridad social y aceptas las condiciones del servicio indicadas en cada plan de servicios. Afiliamos como cotizante dependiente. Con nuestra tecnología y grupo de asesores, podrás pagar en línea o en BALOTO y EFECTY, descargar certificados de afiliación y/o planillas. Después de una rápida verificación, te enviaremos factura de pago y recibirás al correo la información sobre documentos requeridos y tiempos de afiliación según los servicios contratados. Solicita soporte para tus preguntas y dudas a través del PBX, Correo electrónico, Chat o Whatsapp
    </div>
</div>
<br>
<br><br>
<br><br>
<br><br>
<div class="container exclaimer">
    <div class="formulario">
        <form class="form-horizontal" method="POST" action="<?php echo get_home_url(). "/mi-cuenta/registrarse/registro-completado/" ?>" enctype="multipart/form-data">

            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Nombres y Apellidos *:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" required="required" id="nombre" name="nombre" placeholder="Digite sus nombres completos *">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="cedula">Cédula *:</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" required="required" id="identificacion" name="identificacion" placeholder="Digite su cédula *">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Correo Electrónico *:</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" required="required" id="email" name="email" placeholder="Introduzca Correo Electrónico *">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Contraseña *:</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" required="required" id="pwd" name="pwd" placeholder="Introduzca una Contraseña *">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Verifique Contraseña *:</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" required="required" id="pwd-confirmation" name="pwd-confirmation" placeholder="Verifique su Contraseña *">
                </div>
            </div>

            <div class="form-group">
                <label for="nacimiento" class="control-label col-sm-2">Fecha de Nacimiento *:</label>
                <div class="col-sm-9">
                    <input type="date" class="form-control" required="required" id="nacimiento" name="nacimiento" placeholder="Indique su Fecha de Nacimiento *">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="edad">Edad *:</label>
                <div class="col-sm-9">
                    <input type="number" value="embarazo" class="form-control" required="required" id="edad" name="edad" placeholder="Digite su edad *">
                </div>
            </div>

            <div class="form-group">
                <label for="ciudad" class="control-label col-sm-2">Ciudad : </label>
                <div class="col-sm-9">
                    <select required class="form-control" id="sel1" name="city">
                        <option value="0">Seleccione su ciudad de residencia</option>
                        <option value="11001">Bogota</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="embarazo">Si es mujer :</label>
                <div class="col-sm-9">
                    <label for="embarazo">
                        <input type="checkbox" value="embarazo" id="embarazo" name="embarazo">
                        ¿Se encuentra usted en estado de embarazo?
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label for="celular" class="control-label col-sm-2">¿Tiene algun tipo de enfermedad? :</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="enfermedad" name="enfermedad" placeholder="Indique su enfermedad si tiene">
                </div>
            </div>

            <div class="form-group">
                <label for="celular" class="control-label col-sm-2">Celular *:</label>
                <div class="col-sm-9">
                    <input type="tel" class="form-control" required="required" id="celular" name="celular" placeholder="Indique su Número de Celular *">
                </div>
            </div>

            <div class="form-group">
                <label for="fijo" class="control-label col-sm-2">Teléfono Fijo:</label>
                <div class="col-sm-9">
                    <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Indique su Número de Teléfono">
                </div>
            </div>

            <div class="form-group">
                <label for="referido" class="control-label col-sm-2">¿Has sido Referido? </label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" id="referido" name="referido" placeholder="No soy referido o no tengo código">
                </div>
            </div>

            <div class="form-group">
                <label for="riesgo" class="control-label col-sm-2">Nivel de Riesgo *: </label>
                <div class="col-sm-9">
                    <select required class="form-control" id="sel1" name="riesgo">
                        <option value="0">Seleccione deacuerdo a su ocupación</option>
                        <option value="1">NIVEL 1: (Personal de oficinas , Vendedores, Zapateros, Servicio Doméstico, Administradores, Amas de Casa.)</option>
                        <option value="2">NIVEL 2: (Billares, Personal de Restaurante, Ferreterías, Confecciones, Labor Agrícola)</option>
                        <option value="3">NIVEL 3: (Cerrajero, Mecánico, Ebanista, Pintores sin Altura, Electricista)</option>
                        <option value="4">NIVEL 4: (Conductores, Ayudantes)</option>
                        <option value="5">NIVEL 5: (Construcción, Químicos, Escoltas, Pintores y personal de Alturas)</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="tipo" class="control-label col-sm-2">Tipo de Afiliación *: </label>
                <div class="col-sm-9">
                    <select required class="form-control" id="sel1" name="afiliacion">
                        <option value="0">Seleccione los servicios que desea cotizar</option>
                        <option value="1">Básico EPS + ARL (Desde $69.900)</option>
                        <option value="2">Complementario EPS + ARL + CAJA (Desde $89.900)</option>
                        <option value="3">Protección EPS + ARL + PENSIÓN (Desde $186.900 )</option>
                        <option value="4">Integral EPS + ARL + PENSIÓN + CAJA (Desde $199.900)</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="riesgo" class="control-label col-sm-2">ARL : </label>
                <div class="col-sm-9">
                    <p>
                        LOGISCOP informa que ha seleccionado trabajar con: <br> POSITIVA y SURA según EPS y nivel de riesgo
                    </p>
                </div>
            </div>

            <div class="form-group">
                <label for="riesgo" class="control-label col-sm-2">Tenga en cuenta : </label>
                <div class="col-sm-9">
                    <p>
                        Si cambia de EPS, el trámite entre la nueva y la actual EPS toma cerca de 20 días hábiles en surtir efecto. Si requiere tratamiento medico inmediato, le aconsejamos continuar en su actual EPS
                    </p>
                </div>
            </div>

            <div class="form-group">
                <label for="eps" class="control-label col-sm-2">EPS (Salud) *: </label>
                <div class="col-sm-9">
                    <select required class="form-control" id="sel1" name="epSalud">
                        <option value="0">Seleccionar</option>
                        <option value="1">Cafesalud</option>
                        <option value="2">Coomeva</option>
                        <option value="3">Compensar</option>
                        <option value="4">Cruz Blanca</option>
                        <option value="5">Famisanar</option>
                        <option value="5">Nueva EPS</option>
                        <option value="5">Salud Total</option>
                        <option value="5">Sanitas</option>
                        <option value="5">Sura</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="caja" class="control-label col-sm-2">Caja de Compensación: </label>
                <div class="col-sm-9">
                    <select class="form-control" id="sel1" name="cajaCompensacion">
                        <option value="1">Escogí un Plan sin caja de compensación</option>
                        <option value="2">Bogotá - Colsubsidio</option>
                        <option value="3">Bogotá - Compensar</option>
                        <option value="4">Medellín - Comfama</option>
                        <option value="5">Villavicencio - Comfrem</option>
                        <option value="5">Armenia - Comfenalco</option>
                        <option value="5">Cali - Comfenalco</option>
                        <option value="5">Pereira - Comfamiliar</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="beneficiarios" class="control-label col-sm-2">Beneficiarios *: </label>
                <div class="col-sm-9">
                    <select class="form-control" id="sel1" name="beneficiarios">
                        <option value="1">No tengo Beneficiarios</option>
                        <option value="2">Si tengo, mi(s) hijos(as)</option>
                        <option value="3">Si, mi conyuge</option>
                        <option value="4">Si, mis padres dependen economicamente de mi</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="pension" class="control-label col-sm-2">Pensión: </label>
                <div class="col-sm-9">
                    <select class="form-control" id="sel1" name="pensiones">
                        <option value="1">No requiero cotizar</option>
                        <option value="2">Protección</option>
                        <option value="3">Porvenir</option>
                        <option value="4">Colpensiones</option>
                        <option value="5">Colfondos</option>
                        <option value="6">OldMutual</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="cedula" class="control-label col-sm-2">Adjuntar Cédula:</label>
                <div class="col-sm-9">
                    <label class="btn btn-primary btn-file">
                        Insertar Archivo PDF
                        <input type="file" name="cedula" id="cedula" style="display: none" accept="application/pdf">
                    </label>
                </div>
            </div>

            <div class="alert alert-info">
                <strong>
                    Puedes adjuntar la cedula ahora o despúes
                </strong>
                Comprobaremos que tu afiliacion se pueda realizar y te indicaremos las formas de pago ¡Gracias por escogernos!
            </div>

            <div class="form-group">
                <label for="terms" class="control-label col-sm-2">Términos y Condiciones *:</label>
                <div class="col-sm-9">
                    <input type="checkbox" id="acceptedterms" name="acceptedterms" required="required" value="1"> Acepto <a href="#">Términos y Condiciones</a>
                </div>
            </div>

            <!--Submit Button-->
            <div class="form-group" align="center">
                <div align="center">
                    <button type="submit" class="btn btn-success btn-lg">Registrarse como Afiliado</button>
                </div>
            </div>
        </form>
    </div>
</div>
