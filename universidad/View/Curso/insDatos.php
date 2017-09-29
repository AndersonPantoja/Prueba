<div class="form-group col-md-11 col-sm-11 col-xs-11">
<label for="fullname" class="control-label col-md-3 col-sm-3">ID curso<?php foreach ($curso as $cursos) {}?></label>
    <div id="id_curso" class="col-md-8 col-sm-8">
        <?php echo $cursos['id_curso']; ?>
    </div>
</div>
<div class="form-group col-md-11 col-sm-11 col-xs-11">
<label for="fullname" class="control-label col-md-3 col-sm-3">Cupos</label>
    <div class="col-md-8 col-sm-8">
        <?php echo $cursos['cupos']; ?>
    </div>
</div>
<div class="item form-group col-md-11 col-sm-11 col-xs-11">
    <label for="number" class="control-label col-md-3 col-sm-3">fecha inicio</label>
    <div class="date col-md-8 col-sm-8">
        <?php echo $cursos['fecha_inicio']; ?>
    </div>
</div>
<div class="item form-group col-md-11 col-sm-11 col-xs-11">
    <label for="email" class="control-label col-md-3 col-sm-3">fecha fin</label>
    <div class="date col-md-8 col-sm-8">
    <?php echo $cursos['fecha_fin']; ?>
    </div>
</div>
<div class="form-group col-md-11 col-sm-11 col-xs-11">
    <label class="control-label col-md-3 col-sm-3">Dia</label>
    <div class="item col-md-8 col-sm-8">
        <?php echo $cursos['dia']; ?>
    </div>
</div> 
<div class="item form-group col-md-11 col-sm-11 col-xs-11">
    <label for="time" class="control-label col-md-3 col-sm-3">Hora inicio</label>
    <div class="time col-md-8 col-sm-8">
    <?php echo $cursos['hora_inicio']; ?>
    </div>
</div>
<div class="item form-group col-md-11 col-sm-11 col-xs-11">
    <label for="time" class="control-label col-md-3 col-sm-3">Hora fin</label>
    <div class="col-md-8 col-sm-8">
        <?php echo $cursos['hora_fin']; ?>
    </div>
</div>
<div class="form-group col-md-11 col-sm-11 col-xs-11">
    <label class="control-label col-md-3 col-sm-3">Profesor</label>
    <div class="item col-md-8 col-sm-8">
        <?php echo $cursos['profesor']; ?>
    </div>
</div> 
<div class="form-group col-md-11 col-sm-11 col-xs-11">
    <label class="control-label col-md-3 col-sm-3">Materia</label>
    <div class="item col-md-8 col-sm-8">
        <?php echo $cursos['id_materia']; ?>
    </div>
</div>
