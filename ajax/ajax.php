<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 26/06/2019
 * Time: 8:56 CH
 */
$data = array();
$data["success"] = 1;
$data["html"] = '<div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="images/flower.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>';
echo json_encode($data);
exit;