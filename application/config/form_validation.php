<?php

$config = array(
                 'signup' => array(
                                    array(
                                            'field' => 'firstname',
                                            'label' => 'First name',
                                            'rules' => 'trim|required|alpha'
                                         ),
                                    array(
                                            'field' => 'lastname',
                                            'label' => 'Last name',
                                            'rules' => 'required'
                                         ),

                                    array(
                                            'field' => 'email',
                                            'label' => 'Email',
                                            'rules' => 'required|valid_email|is_unique[logins.email]'
                                         ),

                                     array(
                                             'field' => 'password',
                                             'label' => 'Password',
                                             'rules' => 'required|min_length[8]|matches[passconf]|md5'
                                           ),

                                     array(
                                              'field' => 'passconf',
                                              'label' => 'Password Confirmation',
                                              'rules' => 'required|md5'
                                           )

                                    ),
                 'login' => array(
                                    array(
                                            'field' => 'email',
                                            'label' => 'Email',
                                            'rules' => 'required|valid_email'
                                         ),

                                    array(
                                            'field' => 'password',
                                            'label' => 'Password',
                                            'rules' => 'required'
                                          )
                                        )

               );

 ?>
