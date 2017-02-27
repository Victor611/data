<!-- Products -->
<section class="features-tabbed section ">
    <div class="container">
        @foreach()
        @if(position == 1)
        <h2 class="title text-center">{{$title}}Наши продукты</h2>
            @endif
        @endforeach
        <div class="row">
            <div class=" text-center col-md-10 col-sm-10 col-xs-12 col-md-offset-1 col-sm-offset-1 col-xs-offset-0">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs text-center " role="tablist">
                    $foreach
                    <li id="{{$anchor}}data"><a href="#product-1 $i" role="tab" data-toggle="tab"><i class="fa fa-cloud-upload"></i><br /><span class="hidden-sm hidden-xs">{{$name}}Data</span></a></li>
                    <li id="ecommerce"><a href="#product-2" role="tab" data-toggle="tab"><i class="fa fa-tachometer"></i><br /><span class="hidden-sm hidden-xs">E-commerce</span></a></li>
                    <li id="programmatic"><a href="#product-3" role="tab" data-toggle="tab"><i class="fa fa-photo"></i><br /><span class="hidden-sm hidden-xs">Programmatic</span></a></li>
                    <li id="mobile"><a href="#product-4" role="tab" data-toggle="tab"><i class="fa fa-mobile"></i><br /><span class="hidden-sm hidden-xs">Mobile</span></a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    @foreach
                    <div class="tab-pane" id="product-1 $i">
                        <div class="desc text-left">
                            <p><b>Большие данные</b> (англ. <b>big data</b>) — серия подходов, инструментов и методов обработки структурированных и неструктурированных данных огромных объёмов и значительного многообразия для получения воспринимаемых человеком результатов, эффективных в условиях непрерывного прироста, распределения по многочисленным узлам вычислительной сети, сформировавшихся в конце 2000-х годов, альтернативных традиционным системам управления базами данных и решениям класса Business Intelligence.</p>
                            <p>Исходя из определения <b>Big Data</b>, можно сформулировать основные принципы работы с такими данными: </b>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-star"></i><b>Горизонтальная масштабируемость</b>. Поскольку данных может быть сколь угодно много – любая система, которая подразумевает обработку больших данных, должна быть расширяемой. В 2 раза вырос объём данных – в 2 раза увеличили количество железа в кластере и всё продолжило работать.</li>
                                <li><i class="fa fa-star"></i><b>Отказоустойчивость</b>. Принцип горизонтальной масштабируемости подразумевает, что машин в кластере может быть много. Например, Hadoop-кластер Yahoo имеет более 42000 машин (по этой ссылке можно посмотреть размеры кластера в разных организациях). Это означает, что часть этих машин будет гарантированно выходить из строя. Методы работы с большими данными должны учитывать возможность таких сбоев и переживать их без каких-либо значимых последствий.</li>
                                <li><i class="fa fa-star"></i><b>Локальность данных</b>. В больших распределённых системах данные распределены по большому количеству машин. Если данные физически находятся на одном сервере, а обрабатываются на другом – расходы на передачу данных могут превысить расходы на саму обработку. Поэтому одним из важнейших принципов проектирования BigData-решений является принцип локальности данных – по возможности обрабатываем данные на той же машине, на которой их храним</li>
                            </ul>

                            <p>Все современные средства работы с большими данными так или иначе следуют этим трём принципам. Для того, чтобы им следовать – необходимо придумывать какие-то методы, способы и парадигмы разработки средств разработки данных.</p>
                        </div>
                        @if(imgsrc)
                        <figure class="figure text-center">
                            <img class="img-responsive" src="../assets/images/" alt="" />
                            <figcaption class="figure-caption">картинка взята из Google</figcaption>
                        </figure>
                    </div>
                        $i++
                    @endforeach
                    <div class="tab-pane" id="product-2">
                        <h3 class="title sr-only">E-commerce</h3>
                        <div class="desc text-left">
                            <p><b>Электронная коммерция</b> стала неотъемлемой частью современной экономики. Все больше потребителей приобретают товары посредством сети Интернет, а коммерческие организации так или иначе используют возможности данной сети при осуществлении предпринимательской деятельности. Общий мировой объём продаж в одном только потребительском сегменте электронной коммерции превысил отметку в 1 трлн долл. ещё в 2012 г. и характеризуется устойчивым ростом.</p>
                            <p>Рынок электронной коммерции в Европе достиг 312 млрд евро в 2012 г.</p>
                            <p>По прогнозам к 2017 году 10,3 % ($370 млрд в денежном выражении)общих расходов населения США на товары повседневного спроса будет приходится на электронную торговлю и более 60 % всех продаж будут как-либо связаны с интернетом.</p>
                            <blockquote>
                                <p><b>Электронная коммерция</b> — это сфера экономики, которая включает в себя все финансовые и торговые транзакции, осуществляемые при помощи компьютерных сетей, и бизнес-процессы, связанные с проведением таких транзакций.</p>
                            </blockquote>

                        </div>
                        <figure class="figure text-center">
                            <img class="img-responsive" src="../assets/images/features/screenshot-2.jpg" alt="" />
                            <figcaption class="figure-caption">(Автор Гамлет Маркарян [CC0 или CC0], через Викисклад)</figcaption>
                        </figure>
                    </div>

                    <div class="tab-pane" id="product-3">
                        <h3 class="title sr-only">Programmatic</h3>
                        <div class="desc text-left">
                            <p>33333Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc congue leo mauris, a fringilla nisi posuere tincidunt. Aliquam elementum lorem eget sollicitudin suscipit.</p>

                            <p>Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. </p>

                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Nullam consequat</th>
                                        <th>Commodo metus</th>
                                        <th>Dapibus porta</th>
                                        <th>Sed porta</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Faucibus purus</td>
                                        <td>Aliquam sit</td>
                                        <td>Sed porta leo</td>
                                        <td>Duis ut ornare dui</td>
                                    </tr>
                                    <tr>
                                        <td>Condimentum</td>
                                        <td>Curabitur tempus</td>
                                        <td>Fusce vehicula</td>
                                        <td>Nasceturs</td>
                                    </tr>
                                    <tr>
                                        <td>Neque a condimentum</td>
                                        <td>Cum sociis natoque</td>
                                        <td>Penatibus magnis</td>
                                        <td>Curabitur</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <figure class="figure text-center">
                            <img class="img-responsive" src="../assets/images/features/screenshot-4.png" alt="" />
                            <figcaption class="figure-caption">(Screenshot source: Coral - App &amp; website startup kit)</figcaption>
                        </figure>
                    </div>
                    <div class="tab-pane" id="product-4">
                        <h3 class="title sr-only">Mobile</h3>

                        <div class="desc text-left">
                            <p>44444Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc congue leo mauris, a fringilla nisi posuere tincidunt. Aliquam elementum lorem eget sollicitudin suscipit.</p>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu</p>
                            <p class="box">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id nulla at libero ultricies tempus. Duis porta justo quam, ut ultrices felis posuere sit amet. Sed imperdiet bibendum est, sit amet sagittis ante sagittis eu. Ut consequat volutpat sapien sed lobortis. Nullam laoreet vitae justo nec dignissim.</p>
                        </div>
                        <figure class="figure text-center">
                            <img class="img-responsive" src="../assets/images/features/screenshot-4.jpg" alt="" />
                            <figcaption class="figure-caption">(Screenshot source: Coral - App &amp; website startup kit)</figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>