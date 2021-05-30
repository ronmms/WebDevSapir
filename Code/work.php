<section id="work-experience">
        <h1>Work Experience</h1>
        <div class="table-exp">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th></th>
                        <th scope="col">Name</th>
                        <th scope="col">Addresses</th>
                        <th scope="col">Title</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Description</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                $data = json_decode(file_get_contents("./workExp.json"), true);
                foreach ($data as $d) { ?>
                <tr>
                    <td>
                        <img class="table-img" src="<?php echo $d["img"]?>"/>
                    </td>
                    <td><?php echo $d["name"]; ?></td>
                    <td><?php echo $d["adress"]; ?></td>
                    <td><?php echo $d["title"]; ?></td>
                    <td><?php echo $d["duration"]; ?></td>
                    <td><?php echo $d["description"]; ?></td>
                </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
        </div>


    </section>