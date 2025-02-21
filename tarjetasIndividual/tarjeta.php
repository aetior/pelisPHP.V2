<?php
function tarjeta($titulo,$img,$descripcion){
return '       
                    <article>
                        <figure>
                            <img
                                src="'.$img.'"
                                alt="Preview"
                            >
                        </figure>

                        <div class="article-preview">

                            <h2>'.$titulo.'</h2>
                            <p>
                                '.$descripcion.'
                                <a href="#" class="read-more" title="Read More">
                                    Read more
                                </a>
                            </p>
                                <div class="for">
                                <form>
                                <input type="submit" value="Like" name="like">
                                </form>
                                     <form class="form2">
                               
                                <input type="submit" value="DisLike" name="noLike">
                                </form>
                                </div>
                        </div>
                        </article>
                      
              

                    ';}