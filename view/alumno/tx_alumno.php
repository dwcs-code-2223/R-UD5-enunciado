

<form class="form" action="FrontController.php?controller=Alumno&action=tx" method="POST" >
           
            <div class="form-group mb-2">
                <label>Instroduzca DNI del alumno a transferir</label>
                <input class="form-control" type="text" name="dni"  />
            </div>
          

            <input type="submit" value="Transferir" class="btn btn-primary"/>
            <a class="btn btn-outline-danger" href="FrontController.php?controller=Alumno&action=list">Cancelar</a>
        </form>
        