<!-- Content Start -->
<div class="content">
    <div class="main-container1">

        <div class="container">
            <div class="row">


                <div class="col-lg-12">
                    <!-- Box Start -->
                    <div class="inbox box green">

                        <!-- Title Bar Start -->
                        <div class="box-title gray">
                            <span>Новости</span>
                            <!-- <span class="subtitle">// View Messages</span> -->
                        </div>
                        <!-- Title Bar End -->

                        <!-- Content Start -->
                        <div class="content">
                            <table class="regular-table">
                                <thead>
                                <!-- <th><input type="checkbox" name="select-all" id="select-all" class="icheck-blue" /></th> -->
                                <th>Имя</th>
                                <th>Телефон</th>
                                <th>Email</th>
                                <th>Сообщение</th>
                                <!-- <th>Описание</th> -->
                                <th>Дата</th>

                                <th>Удалить</th>

                                </thead>
                                <tbody>

                                <!-- Table Row Start -->
                                {section loop=$order_array name=i}
                                    <tr>
                                        <!-- <td><input type="checkbox" name="select-example" class="icheck-blue" /></td> -->
                                        <td>
                                            <p>{$order_array[i].name}</p>
                                        </td>
                                        <td>
                                            <p>{$order_array[i].number}</p>
                                        </td>
                                        <td>
                                            <p>{$order_array[i].email}</p>
                                        </td>
                                        <td>
                                            <p>
                                                {$order_array[i].message}
                                            </p>
                                        </td>

                                        <td>date</td>


                                        <td class="actions">
                                            <a href="delete_out.php?id={$items[i].id}&name={$items[i].name}"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                {/section}
                                <!-- Table Row End -->



                                </tbody>
                            </table>
                        </div>
                        <!-- Content End -->

                    </div>
                    <!-- Box End -->
                </div>


            </div>
        </div>

    </div>
</div>
<!-- Content End -->

