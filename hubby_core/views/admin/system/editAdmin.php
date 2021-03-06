<?php echo $lmenu;?>
<section id="content">
    <section class="vbox"><?php echo $inner_head;?>
        
        <section class="scrollable" id="pjax-container">
            <header>
                <div class="row b-b m-l-none m-r-none">
                    <div class="col-sm-4">
                        <h4 class="m-t m-b-none"><?php echo $this->core->hubby->getTitle();?></h4>
                        <p class="block text-muted"><?php echo $pageDescription;?></p>
                    </div>
                </div>
            </header>
            <div class="wrapper w-f">
                <div class="hub_table">
					<?php echo validation_errors('<p class="error">', '</p>');?>
                    <?php $this->core->notice->parse_notice();?>
                    <?php echo notice_from_url();?> 
                    <section class="panel">
                        <div class="wrapper b-b font-bold">Liste des administrateurs</div>
                        <div class="wrapper w-f">
                            <form method="post" class="class-body">
                                <div class="form-group">
                                	<label class="label-control">Pseudo de l'utilisateur</label>
                                    <input type="text" class="form-control" disabled="disabled" value="<?php echo $adminInfo['PSEUDO'];?>" />
                                </div>
                                <div class="form-group">
                                	<label class="label-control">Email</label>
                                    <input placeholder="Entrer l'email" type="text" class="form-control" name="user_email" value="<?php echo $adminInfo['EMAIL'];?>" />
                                </div>
                                <div class="form-group">
                                    <select name="edit_priv" class="form-control">
                                        <option value="">Modifier son privil&egrave;ge</option>
                                        <option value="RELPIMSUSE" <?php
										if($adminInfo['PRIVILEGE'] == 'RELPIMSUSE')
										{
											?> selected="selected"<?php
										}
                                        ?>>Utilisateur</option>
                                        <?php
											foreach($getPrivs as $p)
											{
												if($adminInfo['PRIVILEGE'] == $p['PRIV_ID'])
												{
												?>
                                        <option value="<?php echo $p['PRIV_ID'];?>" selected="selected"><?php echo $p['HUMAN_NAME'];?></option>
                                        <?php
												}
												else
												{
												?>
                                        <option value="<?php echo $p['PRIV_ID'];?>"><?php echo $p['HUMAN_NAME'];?></option>
                                        <?php
												}
											}
											?>
                                    </select>
                                </div>
                                <input type="hidden" value="<?php echo $adminInfo['PSEUDO'];?>" name="current_admin" />
                                <input type="submit" class="btn btn-sm btn-primary" value="Enregsitrer" name="set_admin" />
                                <input type="submit" class="btn btn-sm btn-danger" value="Supprimer <?php echo $adminInfo['PSEUDO'];?>" name="delete_admin"/>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </section>
</section>