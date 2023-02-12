<div class="card card-item comments-block">
                    <div class="card-body">
                        <h4 class="pb-3 fs-20"><?php echo number_format(count($commentview)) ?> Comments</h4>
                        <ul class="comments-list pt-3" id="comments">
                        <?php if(!empty($commentview)){?>
                        <?php  foreach($commentview as $crow): ?>
                            <li class="mb-3">
                                <div class="comment-avatar">
                                    <img class="lazy" src="<?=base_url()?>assets/disilab/images/img-loading.png" data-src="<?=base_url()?>assets/disilab/images/img1.jpg" alt="avatar">
                                </div>
                                <div class="comment-body pt-0">
                                    <span class="comment-user text-black"><?php echo $crow['email'] ?></span>
                                    <span class="comment-separated">-</span>
                                    <span class="comment-date text-gray"><?php 
                                            $this->load->helper('date');
                                            $date=$row['date_created'];
                                            $last = new DateTime($date);
                                            $now = new DateTime( date( 'Y-m-d h:i:s', time() )) ; 
                                            $interval = $last->diff($now);
                                            $years = (int)$interval->format('%Y');
                                            $months = (int)$interval->format('%m');
                                            $days = (int)$interval->format('%d');
                                            $hours = (int)$interval->format('%H');
                                            $minutes = (int)$interval->format('%i');
                                            if($years > 0)
                                            {
                                            echo $years.' Year/s  ago' ;
                                            }
                                            else if($months > 0)
                                            {
                                            echo $months.' Month/s  ago' ;
                                            }
                                            else if($days > 0)
                                            {
                                            echo $days.' Day/s ago' ;
                                            }
                                            else if($hours > 0)
                                            {
                                            echo  $hours.' Hour/s  ago' ;
                                            }
                                            else
                                            {
                                            echo $minutes.' minute/s ago' ;
                                            }
                                         ?></span>
                                    <p class="comment-text pt-1 pb-2 lh-22"><?php echo html_entity_decode($crow['comment']) ?></p>
                                    
                                </div>
                            </li>
                            <?php endforeach ?>
                        <?php }else{?>
                            <p class="comment-text pt-1 pb-2 lh-22">No comment/s...</p>
                            <hr>
                        <?php }?>
                        </ul>
                       
                    </div><!-- end card-body -->
                </div><!-- end card -->