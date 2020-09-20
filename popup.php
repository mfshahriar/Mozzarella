<?php

require "./controller/controller.php";

$id=$_GET['id'];

$item=getItemById($id);


echo '<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Order Option</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <ul class="list-group w-100">
                                <li class="list-group-item modal_length">

                                    <img src="Images/'.$item["image"].'.png" class="container_div p_img popup" height="40" width="60">
                                    <div class="container_div popup" id="p_price_div">
                                        <h6 id="p_name">'.$item["f_name"].'</h6>
                                        <p id="p_price">TK: '.$item["price"].'</p>
                                    </div>
                                    <div class="container_div">
                                        <input type="number" id="p_input" max="50" min="1">
                                        <button id="p_plus_btn" class="btn btn-info p_btn">+</button>
                                        <button id="p_minus_btn" class="btn btn-danger p_btn">-</button>
                                    </div>

                                </li>
                                <li class="list-group-item modal_length">
                                    <div>
                                        <lable style="font-weight: bolder;">Spicy Levels: </lable> &nbsp; &nbsp;
                                        <input id="regular" type="radio" value="regular" name="r_brn">
                                        <label for="regular">Regular</label> &nbsp;
                                        <input id="spicy" type="radio" value="spicy" name="r_brn">
                                        <label for="spicy">Spicy</label> &nbsp;
                                        <input id="extra_spicy" type="radio" value="extra_spicy" name="r_brn">
                                        <label for="extra_spicy">Extra spicy</label> &nbsp;
                                    </div>
                                </li>
                                <li class="list-group-item modal_length">
                                    <div>
                                        <table class="table">
                                            <tr>
                                                <th> Add-ons </th>
                                                <th> Cost</th>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <input id="garlic" type="checkbox" value="garlic">
                                                    <label for="garlic">Garlic Sauce</label>
                                                </th>
                                                <th>
                                                    40 TK
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <input id="bbq" type="checkbox" value="bbq">
                                                    <label for="bbq">BBQ Sauce</label>
                                                </th>
                                                <th>
                                                    40 TK
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <input id="cheese" type="checkbox" value="cheese">
                                                    <label for="cheese">Extra CHEESE</label>
                                                </th>
                                                <th>
                                                    40 TK
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <input id="mint" type="checkbox" value="mint">
                                                    <label for="mint">Mint Sauce</label>
                                                </th>
                                                <th>
                                                    40 TK
                                                </th>
                                            </tr>
                                        </table>
                                    </div>
                                </li>
                            </ul>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Add Item</button>
                            </div>
                        </div>
                    </div>
                </div>';

                ?>