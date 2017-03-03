<?php
class Events extends plxPlugin {
 
    public function __construct($default_lang){
    # Appel du constructeur de la classe plxPlugin (obligatoire)
    parent::__construct($default_lang);
    
	
    # Pour accéder à une page de configuration
    $this->setConfigProfil(PROFIL_ADMIN,PROFIL_MANAGER);
	

    # Déclaration des hooks

    $this->addHook('Events', 'Events');
    $this->addHook('ThemeEndHead', 'ThemeEndHead');
    $this->addHook('ThemeEndBody', 'ThemeEndBody');
    $this->addHook('AdminTopEndHead', 'AdminTopEndHead');
	

    } 
    
    public function AdminTopEndHead() { ?>
        <link rel="stylesheet" href="<?php echo PLX_PLUGINS ?>plugins/Events/app/events-admin.css"> 
    <?php }


    public function ThemeEndHead() { ?>
           <link rel="stylesheet" href="<?php echo PLX_PLUGINS ?>Events/app/events.min.css"> 
    <?php }

    public function Events(){

				
	
            $nb_membres = floor(sizeof($this->aParams)/4); // nombre de champs
        
            for($i=$nb_membres; $i>0; $i--) { // boucle pour afficher les membres
                $event = $this->getParam('event'.$i);
                $date = $this->getParam('date'.$i);
                $link = $this->getParam('link'.$i);
                $img = $this->getParam('img'.$i);
                
                
        
                $date_us = implode('-', array_reverse(explode('/', $date)));

                $datedujour = date("Y-m-d");
                $jmoins = ((strtotime($date_us)) - strtotime($datedujour));
                $jmoins = round($jmoins / (60*60*24)); 
	
                if(!empty($event)&&($jmoins>-1)&&!empty($img)) { 
                    ?>
                        
                        <div class="block-event">
                           <div class="event">
                            <?php if((empty($link))&&(!empty($img))){ ?>
							  <img class="vignette bg" src="<?php echo plxUtils::strCheck($img) ?>" alt="vignette"> <?php
							}elseif(!empty($img)){ ?>
                              <a href="<?php echo plxUtils::strCheck($link) ?>"><img class="vignette bg" src="<?php echo plxUtils::strCheck($img) ?>" alt="vignette"></a><?php
                              }?>
							  <?php if(!empty($img)){ ?>
							  <h3 class="event-titre"><?php echo plxUtils::strCheck($event) ?></h3>
                           </div> 
                           <div class="info-event">
                               <p>
                                   <span class="left">

                                      <?php if ($jmoins == 0){
                                          echo "Aujourd'hui";
                                      }elseif ($jmoins == 1){
                                          echo"Demain";
                                      }else{
                                          echo"Dans $jmoins jours";
                                        } ?>
                                   </span>
                                   <span class="right">
                                       <?php echo plxUtils::strCheck($date) ?>
                                   </span>
                               </p>
                           </div>
						   <?php 
							  } ?>
                        </div>
						


                <?php } ?>
						<div class="block-event">
							<div class="event2">
							<?php if(empty($img)&&!empty($event)){ ?>
								<div style="text-align:center;">
								<h3 class="event-titre">
								<?php echo plxUtils::strCheck($event) ?></h3></div>
								&nbsp;
								<p>
								<?php if ($jmoins == 0){
									echo "Aujourd'hui";
								}elseif ($jmoins == 1){
									echo"Demain";
								}else{
									echo"Dans $jmoins jours";
								} ?>
							   </p>
							</div>
						</div>
						<?php
						} ?> 
						
            <?php 
			
			} ?>

    <?php 
	 } 

    public function ThemeEndBody(){ ?> 

     

    <?php }
      
} // class Events
?>
