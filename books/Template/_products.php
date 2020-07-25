 <!--   product  -->
 <?php
    $item_id = $_GET['item_id'] ?? 1;
    foreach ($product->getData() as $item) :
        if ($item['item_id'] == $item_id) :
?>
 <section id="product" class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="<?php echo $item['item_image'];?>" alt="product" class="img-fluid">
                        <div class="form-row pt-4 font-size-16 font-baloo">
                            <div class="col">
                                <button type="submit" class="btn btn-danger form-control">Proceed to Buy</button>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-warning form-control">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 py-5">
                        <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                        <small>by <?php echo $item['item_brand'];?></small>
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <a href="#" class="px-2 font-rale font-size-14">20,534 ratings | 1000+ answered
                                questions</a>
                        </div>
                        <hr class="m-0">

                        <!---    product price       -->
                        <table class="my-3">
                            <tr class="font-rale font-size-14">
                                <td>M.R.P:</td>
                                <td><strike>$162.00</strike></td>
                            </tr>
                            <tr class="font-rale font-size-14">
                                <td>Deal Price:</td>
                                <td class="font-size-20 text-danger">$<span><?php echo $item['item_price'];?></span><small
                                        class="text-dark font-size-12">&nbsp;&nbsp;Inclusive of all taxes</small></td>
                            </tr>
                            <tr class="font-rale font-size-14">
                                <td>You Save:</td>
                                <td><span class="font-size-16 text-danger">$152.00</span></td>
                            </tr>
                        </table>
                        <!---    !product price       -->

                        <!--    #policy -->
                        <div id="policy">
                            <div class="d-flex">
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">10 Days <br> Replacement</a>
                                </div>
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-truck  border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">Daily Tuition <br>Deliverd</a>
                                </div>
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">1 Year <br>Warranty</a>
                                </div>
                            </div>
                        </div>
                        <!--    !policy -->
                        <hr>

                        <!-- order-details -->
                        <div id="order-details" class="font-rale d-flex flex-column text-dark">
                            <small>Delivery by : Mar 29 - Apr 1</small>
                            <small>Sold by <a href="#">Abdulrahman Aljafar </a>(4.5 out of 5 | 18,198 ratings)</small>
                            <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer -
                                424201</small>
                        </div>
                        <!-- !order-details -->

                        <div class="row">
                            <div class="col-6">

                            </div>
                            <div class="col-6">
                                <!-- product qty section -->
                                <div class="qty d-flex">
                                    <h6 class="font-baloo">Qty</h6>
                                    <div class="px-4 d-flex font-rale">
                                        <button class="qty-up border bg-light" data-id="pro1"><i
                                                class="fas fa-angle-up"></i></button>
                                        <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light"
                                            disabled value="1" placeholder="1">
                                        <button data-id="pro1" class="qty-down border bg-light"><i
                                                class="fas fa-angle-down"></i></button>
                                    </div>
                                </div>
                                <!-- !product qty section -->
                            </div>
                        </div>


                    </div>

                    <div class="col-12">
                        <h6 class="font-rubik">Product Description</h6>
                        <hr>
                        <p class="font-rale font-size-14">Set kids up to succeed in school with a learn to write for
                            kids guide that teaches them letters, shapes, and numbers―and makes it fun. My First
                            Learn-to-Write Workbook introduces your early writer to proper pen control, steady line
                            tracing, new words, and more with dozens of exercises that will engage their minds and boost
                            their reading and writing comprehension skills.

                            This learn to write for kids book includes:

                            Build writing muscles―During these activities, kids will use their pencil to follow paths
                            and draw different shapes, so they build their fine motor skills.
                            Fun and colorful―This learn to write for kids workbook brings the skills to life, with
                            helpful (and silly) pictures and illustrations.

                            <p class="font-rale font-size-14">
                                Practice makes perfect―While this book isn’t wipeable or erasable, you can keep the
                                writing
                                going with almost 80 full pages worth of practice space.
                                Get your little one on the right path to reading and
                                writing with this exciting learn to write for kids workbook.</p>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <?php
        endif;
        endforeach;
?>
        <!--   !product  -->