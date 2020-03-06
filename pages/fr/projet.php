<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Soumettre un projet</title>
    
    <?php $index="projet"; include("../../includes/header.php"); ?>
    <section id="helm" class="wow fadeIn">

        <div class="helm-container">
          <?php include("../../includes/menu.php"); ?>
    <style type="text/css">
      body {
        background-color: #DADADA;
      }
      body > .grid {
        height: 100%;
      }
      .columnForm {
        max-width: 450px;
      }
    </style>

    <div style="width: 100%;position: relative; top: -70px;" >
            
      <div class="modal-dialog modal-dialog-centered" role="document" style="max-width:650px">
        <div class="modal-content"  style="margin-top:40px; margin-bottom:20px;">
              <div class="tab-content stacked segment" id="nav-tabContent" style=" box-shadow:rgba(0,0,0,0.2) 0px 0px 10px 1px; border-radius:5px;">
                <div class="tab-pane fade show active" id="infos-demandeur" role="tabpanel" aria-labelledby="nav-home-tab">
                  <div class="modal-header ui fields" style="padding-top:-5px!important; padding-bottom:-5px!important;
                                                    font-family: 'Roboto', sans-serif!important;font-weight: 300!important;line-height: 1.625em!important;">
                      <h5 class="modal-title" id="ModalLongTitle" data-backdrop="false" style="font-size:24px!important;color:darkorange!important;margin-top:0px!important;margin-bottom:0px!important;">
                        Nouveau projet
                      </h5>
                  </div>
                  <form action="pages/connexion.php.php" method="post" autocomplete="off" id="formA" class="text-center border border-light p-5 ui large form"> 
                    <div class="field">
                        <label for="" style="float:left; font-weight:100"><i class=" orange idea icon"></i> Nom du projet</label>
                        <div class="ui left icon input">
                            <input type="text" name="name" placeholder="Nom du projet"  required="required">
                        </div>
                      </div>

                      <div class="ui field">
                        <label for="" style="float:left; font-weight:100"><i class=" orange picture icon"></i> Image représentative du projet</label>
                        <br style="margin:3px;">
                        <label for="imagefile" style="color:white" class="ui button large fluid teal">Sélctionnez le fichier</label>
                        <input type="file" name="imagefile" accept="image/*" id="imagefile" style="display:none">
                      </div>
                    
                      <div class="field">
                        <label for="" style="float:left; font-weight:100"><i class="money green icon"></i> Montant visé</label>
                        <div class="ui left icon input">
                            
                            <input type="number" name="number" placeholder="Montant visé"  required="required">
                        </div>
                      </div> 

                      <div class="field">
                        <label for="" style="float:left; font-weight:100"><i class="block  layout icon orange"></i>   Catégorie du projet</label>
                        <select name="categorie" id="">
                          <option value="Informatique">Informatique</option>
                          <option value="Cosmetique">Cosmetique</option>
                          <option value="Agricole">Agricole</option>
                          <option value="Ingenieurie">Ingenieurie</option>
                          <option value="Education">Education</option>
                          <option value="Santé">Santé</option>
                        </select>
                      </div>

                      <div class="field">
                        <label for="" style="float:left; font-weight:100"><i class="info blue icon"></i> Slogan</label>
                        <div class="ui left icon input">
                            
                            <input type="text" name="number" placeholder="Slogan"  required="required">
                        </div>
                      </div> 

                      <div class="field">
                        <span  style="float: left;"><i class="tag icon teal"></i> Description du projet</span>
                        <div class="ui left icon input">
                            <textarea name="text"> </textarea>
                        </div>
                      </div>
                      <div class="fields two">        
                        <span class="field"><button type="submit" class="ui fluid large orange submit button" >Envoyer</button></span>
                        <span class="field"><button type="reset" class="ui fluid large teal submit button" >Reinitialiser</button></span>
                      </div>
                  </form>
            </div>
          </div>
        </div>
      </div>
  </div>
              <style>
                #helm {
                  width: 100%;
                  height:60px;
                  background-size: 100%;
                  position: relative;
                  margin-top: 40px;
                }
              </style>

        <?php 
          
            include("../../includes/footer.php");
          
        ?>
    </body >
</html>