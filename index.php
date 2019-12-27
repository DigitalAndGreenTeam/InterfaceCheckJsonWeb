<?php
$getfile = file_get_contents('thefiletocheck.json');
$jsonfile = json_decode($getfile);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Olivier Leteneur - December 2019">
    <title>Machina State</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="assets/css/simple_layout.css">
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Computer state</a>
            </div>
            <!-- <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li class="clr1 active"><a href="index.html">Home</a></li>
                    <li class="clr2"><a href="">Choice 1</a></li>
                    <li class="clr3"><a href="">Choice 2</a></li>
                </ul>
            </div> -->
        </div>
    </nav>
    <br><br><br>
    <h3>Begin of file</h3>
    <hr>
    <div class="container">
        <div class="jumbotron">
            <!-- <h3>And the jumbotron is here</h3>
            <p>Create, Read, Update and Delete Data from/to JSON</p> -->
            <div class="container">
        <div class="row">
            <div class="col-md-9">
                <table class="table table-striped table-bordered table-hover">
                    <h5>About json file</h5>
                    <tr>
                        <td>File creation date</td>
                        <td><?php echo $jsonfile->file_creation; ?></td>
                    </tr>
                    <tr>
                        <td>File harvest version</td>
                        <td><?php echo $jsonfile->Recolt_version; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
        </div>
    </div>
    <!-- <div class="container">
        <div class="btn-toolbar">
            <a class="btn btn-primary" href="insert.php"><i class="icon-plus"></i> Insert Data</a>
            <a class="btn btn-primary" href="insertJSON.php"><i class="icon-plus"></i> Insert JSON File</a>
            <div class="btn-group"> </div>
        </div>
    </div> -->
    <br>
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped table-bordered table-hover">
                    <h4>Basics</h4>
                    <tr>
                        <th>item</th>
                        <th>value</th>
                    </tr>
                    <tr>
                        <td>Machine Name</td>
                        <td><?php echo $jsonfile->machine_name_fqdn; ?></td>
                    </tr>
                    <tr>
                        <td>Distributor</td>
                        <td><?php echo $jsonfile->distributor; ?></td>
                    </tr>
                    <tr>
                        <td>Kernel Version</td>
                        <td><?php echo $jsonfile->kernel_version; ?></td>
                    </tr>
                    <tr>
                        <td>Release</td>
                        <td><?php echo $jsonfile->release; ?></td>
                    </tr>
                    <tr>
                        <td>CPU</td>
                        <td><?php echo $jsonfile->CPU; ?></td>
                    </tr>
                    <tr>
                        <td>CPU Model</td>
                        <td><?php echo $jsonfile->CPU_model; ?></td>
                    </tr>
                    <tr>
                        <td>Total Memory</td>
                        <td><?php echo $jsonfile->TotalMemory; ?></td>
                    </tr>
                    <tr>
                        <td>Start</td>
                        <td><?php echo $jsonfile->start; ?></td>
                    </tr>
                    <tr>
                        <td>Last Start</td>
                        <td><?php echo $jsonfile->last_start; ?></td>
                    </tr>
                </table>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-striped table-bordered table-hover">
                            <br>
                            <h4>Disks</h4>
                            <tr>
                                <th>#</th>
                                <th>name</th>
                                <th>value</th>
                                <th>message</th>
                            </tr>
                            <?php $no = 0; foreach ($jsonfile->check_disk as $index => $obj): $no++;?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $index; ?></td>
                                <td><?php echo $obj->value; ?></td>
                                <td><?php echo $obj->message; ?></td>
                            </tr>
                            <?php endforeach;?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-striped table-bordered table-hover">
                            <br>
                            <h4>Memory Usage</h4>
                            <tr>
                                <th>total</th>
                                <th>used</th>
                                <th>free</th>
                                <th>buffer</th>
                                <th>available</th>
                                <th>% free</th>
                                <th>message</th>
                            </tr>
                            <?php $no = 0; foreach ($jsonfile->check_mem_usage as $index => $obj): $no++;?>
                            <tr>
                                <td><?php echo $obj->mem_usage_total; ?></td>
                                <td><?php echo $obj->mem_usage_use; ?></td>
                                <td><?php echo $obj->mem_usage_free; ?></td>
                                <td><?php echo $obj->mem_usage_buffer; ?></td>
                                <td><?php echo $obj->mem_usage_available; ?></td>
                                <td><?php echo $obj->pct_libre; ?></td>
                                <td><?php echo $obj->message; ?></td>
                            </tr>
                            <?php endforeach;?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-striped table-bordered table-hover">
                            <br>
                            <h4>CPU Usage</h4>
                            <tr>
                                <th>cpu usage</th>
                                <th>user</th>
                                <th>system</th>
                                <th>nice</th>
                                <th>idle</th>
                                <th>wait</th>
                                <th>tshi</th>
                                <th>tssi</th>
                                <th>tsth</th>
                                <th>message</th>
                            </tr>
                            <?php $no = 0; foreach ($jsonfile->check_cpu_usage as $index => $obj): $no++;?>
                            <tr>
                                <td><?php echo $index; ?></td>
                                <td><?php echo $obj->cpu_usage_user; ?></td>
                                <td><?php echo $obj->cpu_usage_system; ?></td>
                                <td><?php echo $obj->cpu_usage_nice; ?></td>
                                <td><?php echo $obj->cpu_usage_idle; ?></td>
                                <td><?php echo $obj->cpu_usage_wait; ?></td>
                                <td><?php echo $obj->cpu_usage_tshi; ?></td>
                                <td><?php echo $obj->cpu_usage_tssi; ?></td>
                                <td><?php echo $obj->cpu_usage_tsth; ?></td>
                                <td><?php echo $obj->message; ?></td>
                            </tr>
                            <?php endforeach;?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-striped table-bordered table-hover">
                            <br>
                            <h4>Network</h4>
                            <tr>
                                <th>#</th>
                                <th>network interface card</th>
                                <th>ip</th>
                                <th>debit</th>
                            </tr>
                            <?php $no = 0; foreach ($jsonfile->check_reseaux as $index => $obj): $no++;?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $index; ?></td>
                                <td><?php echo $obj->ip; ?></td>
                                <td><?php echo $obj->debit; ?></td>
                            </tr>
                            <?php endforeach;?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-striped table-bordered table-hover">
                            <br>
                            <h4>Host file</h4>
                            <tr>
                                <th>#</th>
                                <th>ip</th>
                                <th>name</th>
                            </tr>
                            <?php $no = 0; foreach ($jsonfile->hosts as $index => $obj): $no++;?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $obj->ip; ?></td>
                                <td><?php echo $obj->fqdn; ?></td>
                            </tr>
                            <?php endforeach;?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-striped table-bordered table-hover">
                            <br>
                            <h4>Network Interface Card</h4>
                            <tr>
                                <th>NIC</th>
                                <th>ip</th>
                                <th>debit</th>
                            </tr>
                            <?php $no = 0; foreach ($jsonfile->check_reseaux as $index => $obj): $no++;?>
                            <tr>
                                <td><?php echo $index; ?></td>
                                <td><?php echo $obj->ip; ?></td>
                                <td><?php echo $obj->debit; ?></td>
                            </tr>
                            <?php endforeach;?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-striped table-bordered table-hover">
                            <br>
                            <h4>Packages installed</h4>
                            <tr>
                                <th>#</th>
                                <th>item</th>
                                <th>value</th>
                            </tr>
                            <?php $no = 0; foreach ($jsonfile->check_packages as $index => $obj): $no++;?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $index; ?></td>
                                <td><?php echo $obj->version_package; ?></td>
                            </tr>
                            <?php endforeach;?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br>
    <hr>
    <h3>End of file</h3>
    <br>
</body>
<!-- <?php var_dump(json_decode($getfile));?> -->

</html>
