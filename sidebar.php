<div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">Menu</li>
                            <li>
                                <a href="index.php" class="waves-effect"><i class="mdi mdi-home"></i><span> Dashboard <span class="badge badge-pill badge-primary float-right"></span></span></a>
                            </li>
                            <?php
                             $db=getDB();
                             $user_id =	$_SESSION['member_id'];
                            $select_user=$db->prepare("SELECT user_role FROM users where id=$user_id");
                            $select_user->execute();
                            $roles=$select_user->fetch();
                        echo     $role = $roles["user_role"];
                            ?>
                           <li>
                                <a href="form.php" class="waves-effect"><i class="mdi mdi-account-plus"></i><span> Add New User</span></a>
                            </li>
							 
							  <li>
                                <a href="referal.php" class="waves-effect"><i class="mdi mdi-barcode"></i><span> Add Referal To User</span></a>
                            </li>
								  <li>
                                <a href="list.php" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i><span>Orders List</span></a>
                            </li>
                            	  <li>
                                <a href="list.php" class="waves-effect"><i class="mdi mdi-currency-usd"></i><span>Transfer Money </span></a>
                            </li>
                            <li>
                                <a href="list.php" class="waves-effect"><i class="mdi mdi-cart"></i><span>All Products </span></a>
                            </li>
                            <li>
                                <a href="list.php" class="waves-effect"><i class="mdi mdi-email"></i><span>Contacts </span></a>
                            </li>
                        </ul>
                    </div>