@extends('frontend.layout.master')
@section('content')

<!-- main home -->
<section class="main-home">
    <div class="bannar-backg">
<meta name="google-site-verification" content="nXHPXe3tQ5i6zqcxzb-i0D-E0WOSwclwVTTDCD4wIUk" />
    </div>
    <div class="container">
        <div class="describt-tab mx-auto">
            <ul class="insurance_tabs list-none flex justify-center gap-3 md:gap-5">
                <li class="insurance_tabs_item ">
                    <a class="insurance_tabs_item_link insurance_tabs_item_link__active" href="/">
                        <img src="{{ asset('frontend') }}/assets/images/car-insurance-logo.png" alt="تأمين السيارات"
                            title="تأمين السيارات" class="w-8 md:w-10 max-w-full">
                        <span>تأمين السيارات</span>
                    </a>
                </li>
                <li class="insurance_tabs_item ">
                    <a href="/" class="insurance_tabs_item_link">
                        <img src="{{ asset('frontend') }}/assets/images/health-insurance-gray.png" alt="التأمين الطبي"
                            title="التأمين الطبي" class="w-8 md:w-10 max-w-full">
                        <span>التأمين الطبي</span>
                    </a>
                </li>
            </ul>
        </div>
        <h1 class="banner-heading w-100 mt-0 md:mt-5 lg:mt-5 my-2.5 mx-auto text-center">الموقع الأول لمقارنة أسعار
            التأمين في المملكة</h1>
        <div class="md:w-2/3 lg:w-1/2 mx-auto">
            <a href="" target="_blank">
                <img src="{{ asset('frontend') }}/assets/images/tameeni-cashback-v2-ar.png" alt="Tameeni Insurance">
            </a>
        </div>
        <!-- jjjj -->
        <div class="container">
            <div class="d-flex titel-contant">
                <div class="col--4">
                    <h5 class="tab-titel mt-5 p-2" data-id="web" id="web_js">تأمين ضد الغير & شامل
                    </h5>
                </div>
                <div class="col--4">
                    <h5 class="tab-titel  border mt-5 p-2" data-id="ai" id="ai_js">
                        تأمين الأعطال الميكانيكية</h5>
                </div>
                <div class="col--4">
                    <h5 class="tab-titel border mt-5 p-2" data-id="desigen" id="design_js">
                        معلومات المركبة من موجز</h5>
                </div>
            </div>
            <div class="row">
                <div class="">
                    <div class="tab-contant activee boxs-for-buy my-3 " id="web">
                        <h4>اشتر تأمين ضد الغير/شامل في دقائق</h4>
                        <form action="{{ route('client.store_national_number')}}" method="POST" id="web_form">
                            @csrf
                            <input type="hidden" value="1" name="tameen_type" required>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">رقم الهوية </label>
                                <input class="ta form-control input-of-buy"
                                    placeholder="رقم الهوية الوطنية أو الإقامة أو الشركة" inputmode="numeric"
                                    name="national_number" required maxlength="10">
                            </div>
                            @error('national_number')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <button type="submit" class="ta btn btn-secondary btn-sm mt-4 w-full"
                                style="min-width: 150px;">اشترك الآن</button>
                        </form>
                    </div>
                </div>
                <div class="">
                    <div class="tab-contant boxs-for-buy  my-3 " id="ai">
                        <h4>تأمين الأعطال الميكانيكية</h4>
                        <p>يوفر تغطية تأمينية لسيارتك تشمل اجور الأيدي العاملة وتكلفة إصلاح الأعطال الميكانيكية
                            والكهربائية. يجــب أن يكــون عمــر الســيارة أقــل مــن 10 ســنوات وأن تقـل المسـافة التـي
                            قطعتهـا عـن 200000 كـم (علـى عـداد المسـافات)</p>
                        <form action="{{ route('client.store_national_number')}}" id="desigen_form" method="POST">
                            @csrf
                            <input type="hidden" value="2" name="tameen_type" required>
                            <div class="row mb-3">
                                <div class="col col-md-4">
                                    <label for="exampleInputPassword1" class="form-label"> رقم الهوية او الاقامة</label>
                                    <input class="ta form-control input-of-buy" id="phid0" type="number" required
                                        placeholder="رقم الهوية  أو الإقامة" inputmode="numeric" name="national_number"
                                        maxlength="10">
                                    @error('national_number')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col col-md-4">
                                    <label for="exampleInputPassword1" class="form-label">رقم التسلسلى </label>
                                    <input class="ta form-control input-of-buy" type="number" required
                                        placeholder="الرقم التسلسلى" inputmode="numeric" name="serial_number">
                                    @error('serial_number')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col col-md-4">
                                    <label class="form-label">قراءة العداد
                                    </label>
                                    <input class="ta form-control input-of-buy" type="number"
                                        placeholder="قراءة العداد " inputmode="numeric" autocomplete="off"
                                        name="car_counter_number" value="{{old('car_counter_number')}}" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col col-md-4">
                                    <label for="exampleInputPassword1" class="form-label"> تاريخ بدء الوثيقة</label>
                                    <input class="ta form-control input-of-buy" type="date" required
                                        name="contract_started_at">
                                </div>
                                <div class="col col-md-4">
                                    <label for="used_for" class="form-label">الغرض من الاستخدام</label>
                                    <select class="form-control" name="use_car_for" id="used_for" required>
                                        <option selected value="شخصي">شخصى</option>
                                        <option value="تجارى">تجارى</option>
                                        <option value="تأجير">تأجير</option>
                                        <option value="نقل الركاب">نقل الركاب او كريم او اوبر</option>
                                        <option value="نقل البضائع">نقل البضائع</option>
                                        <option value="نقل مشتقات نفطية">نقل مشتقات نفطية</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <h5><input type="checkbox" id="accept_conditions"> أوافق على منح تأميني الحق في
                                    الاستعلام عن بياناتي وبيانات
                                    مركبتي من الجهات المعنية لأجل اصدار التسعيرة </h5>
                            </div>
                            <button disabled type="submit" class="ta btn btn-secondary btn-sm mt-4 w-full"
                                id="submit_button_1" style="min-width: 150px;">اشترك
                                الآن</button>
                        </form>
                    </div>
                </div>
                <div class="">
                    <div class="tab-contant boxs-for-buy  my-3 " id="desigen">
                        <h4>معلومات المركبة من موجز</h4>
                        <p>خدمة متطورة تقدم المعلومات المتوفرة عن أي مركبة مستعملة منذ تاريخ دخولها إلى المملكة العربية
                            السعودية، ويساعد «موجَز» الباحثين عن سيارات مستعملة على اتخاذ قرار الشراء بناءاً على معلومات
                            موثوقة المصدر.</p>
                        <form action="{{ route('client.store_national_number')}}" method="POST" id="ai_form">
                            @csrf
                            <input type="hidden" value="3" name="tameen_type" required>

                            <div class="row mb-3">
                                <div class="col col-md-6">
                                    <label for="exampleInputPassword1" class="form-label">رقم الهوية </label>
                                    <input class="ta form-control input-of-buy" type="tel" placeholder="رقم الهوية "
                                        inputmode="numeric" name="national_number" required>
                                </div>
                                <div class="col col-md-6">
                                    <label for="exampleInputPassword1" class="form-label">الرقم التسلسلى </label>
                                    <input class="ta form-control input-of-buy" type="tel" placeholder="الرقم التسلسلى"
                                        inputmode="numeric" name="serial_number" required>
                                </div>

                            </div>
                            <div class="row mb-3">
                                <div class="col col-md-6">
                                    <label for="exampleInputPassword1" class="form-label">رقم الجوال </label>
                                    <input class="ta form-control input-of-buy" maxlength="10" type="tel"
                                        placeholder="05********" inputmode="numeric" name="phone" required>
                                </div>
                                <div class="col col-md-6">
                                    @php
                                    $years = [];
                                    for($i = 1930 ; $i<2025 ; $i++){ $years []=$i; } @endphp
                                     <label class="form-label">سنة الصنع</label>
                                        <select class="form-control" name="car_made_at" id="car_made_at" required>
                                            <option selected>اختر</option>
                                            @foreach ($years as $year)
                                            <option value="{{$year}}">{{$year}}</option>
                                            @endforeach
                                        </select>
                                </div>
                            </div>
                            <button data-testid="homeTplAndCompSubmit" class="ta btn btn-secondary btn-sm mt-4 w-full"
                                data-toggle="modal" data-target="#existing-popup" type="submit"
                                style="min-width: 150px;">اشترك
                                الآن</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- lllllll -->
    </div>
</section>
<!-- end main home -->

<section class="service">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 p-1">
                <div class="content  rounded border border-1 p-4">

                    <figure class=" d-flex justify-content-center">
                        <img src="{{ asset('frontend') }}/assets/images/services/feature-offers.png" class="w-25">

                    </figure>
                    <h4 class="text-center">خصومات و عروض خاصة</h4>
                    <p class="text-center">جهات حكوميه وخاصه</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 p-1">
                <div class="content  rounded border border-1 p-4">

                    <figure class=" d-flex justify-content-center">
                        <img src="{{ asset('frontend') }}/assets/images/services/feature-services.png" class="w-25">

                    </figure>
                    <h4 class="text-center">خدماتي</h4>
                    <p class="text-center">طباعة وثيقة التأمين-الاستعلام عن حالة الربط بالمرور</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 p-1">
                <div class="content  rounded border border-1 p-4 text-center">
                    <div class="row justify-content-between  m-auto">
                        <div class="col-6 rounded border border-1 py-2 px-1 service-google">
                            <figure class="d-flex justify-content-center ">
                                <img src="{{ asset('frontend') }}/assets/images/services/google.png" alt="" srcset="">
                            </figure>
                            <p>أعلى من 4.8/5</p>
                            <div class="icon-start">
                                <i class="fa-regular fa-star text-warning"></i>
                                <i class="fa-regular fa-star text-warning"></i>
                                <i class="fa-regular fa-star text-warning"></i>
                                <i class="fa-regular fa-star text-warning"></i>
                                <i class="fa-regular fa-star text-warning"></i>
                            </div>
                        </div>

                        <div class="col-5 rounded border border-1 py-2 px-1 service-twitter">
                            <figure class="d-flex justify-content-center ">
                                <img src="{{ asset('frontend') }}/assets/images/services/twiter.png" alt="" srcset="">
                            </figure>
                            <p>+1777,000</p>
                            <p>متابع</p>
                        </div>
                    </div>

                    <p class="text-center mt-2">الموقع الاعلي تقيما بالمملكه لتأمين السيارات</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 p-1">
                <div class="content  rounded border border-1 p-4">
                    <h4 class="text-center">ادفع واكسب نقاط</h4>
                    <figure class=" d-flex justify-content-center">
                        <img src="{{ asset('frontend') }}/assets/images/services/feature-qitafPionts.png" class="w-25">

                    </figure>
                    <p class="text-center">تطبيق الشروط و الاحكام</p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="bottom mt-5  d-flex justify-content-center align-item-center">
                <figure class="ms-2">
                    <img src="{{ asset('frontend') }}/assets/images/services/insurance-authority.svg" alt="">
                </figure>

                <div>
                    <span>مصرح من قبل</span>
                    <h3>هيئة التأمين</h3>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- slider section -->

<!-- slider section -->

<section class="slider-section">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-2">
                <h5>أكثر من 20 شركة تأمين في مكان واحد</h5>
            </div>
            <div class="col-lg-10 ">
                <div class="logos">
                    <div class="logos-slide">
                        <img src="{{ asset('frontend') }}/assets/images/ACIG.png" alt="">
                        <img src="{{ asset('frontend') }}/assets/images/Salama.png" alt="">
                        <img src="{{ asset('frontend') }}/assets/images/Der3.png" alt="">
                        <img src="{{ asset('frontend') }}/assets/images/walaa.png" alt="">
                        <img src="{{ asset('frontend') }}/assets/images/Malath.png" alt="">
                        <img src="{{ asset('frontend') }}/assets/images/ACIG.png" alt="">
                        <img src="{{ asset('frontend') }}/assets/images/Salama.png" alt="">
                        <img src="{{ asset('frontend') }}/assets/images/Der3.png" alt="">
                        <img src="{{ asset('frontend') }}/assets/images/walaa.png" alt="">
                        <img src="{{ asset('frontend') }}/assets/images/Malath.png" alt="">
                        <img src="{{ asset('frontend') }}/assets/images/ACIG.png" alt="">
                        <img src="{{ asset('frontend') }}/assets/images/Salama.png" alt="">
                        <img src="{{ asset('frontend') }}/assets/images/Der3.png" alt="">
                        <img src="{{ asset('frontend') }}/assets/images/walaa.png" alt="">
                        <img src="{{ asset('frontend') }}/assets/images/Malath.png" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>




<!-- slider section -->



<section class="why-tameeny">
    <div class="container">
        <h2 class="text-center">ليه أشتري وثيقة التأمين من تأميني؟</h2>
        <p class="text-center">يمكن صار لك موقف واشتريت وثيقة تأمين واكتشفت إن فيه عرض أفضل! مع تأميني.. ما راح تتكرر لك
            هالتجربة!</p>
        <div class="row">
            <div class="col-lg-6 p-2">
                <div
                    class="content border border-1 d-flex justify-content-start p-2 rounded bg-white alien-items-center">
                    <figure class="content-img">
                        <img src="{{ asset('frontend') }}/assets/images/why-tameeny/gicon-01.png" alt="tameeny"
                            class="w-100 ">
                    </figure>
                    <div class="content-body ">
                        <h3>الأول في المملكة</h3>
                        <p>الأول في المملكة: بسبب خبرتنا كأول موقع في المملكة لمقارنة تأمين السيارات و التأمين الطبي
                            قدرنا نوفر هالخدمة بشكل بسيط وسهل.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 p-2">
                <div
                    class="content border border-1 d-flex justify-content-start p-2 rounded bg-white alien-items-center">
                    <figure class="content-img">
                        <img src="{{ asset('frontend') }}/assets/images/why-tameeny/gicon-02.png" alt="tameeny"
                            class="w-100">
                    </figure>
                    <div class="content-body ">
                        <h3>مكان واحد للتأمين</h3>
                        <p>جديد التأمين مهمة صعبة وطويلة، لذلك احنا في تأميني جمعنا لك عروض شركات التأمين في مكان واحد
                            وشلنا عنك هم إنك تدور على شركات التأمين عشان تحصل العرض المناسب لك.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 p-2">
                <div
                    class="content border border-1 d-flex justify-content-start p-2 rounded bg-white alien-items-center">
                    <figure class="content-img">
                        <img src="{{ asset('frontend') }}/assets/images/why-tameeny/gicon-03.png" alt="tameeny"
                            class="w-100">
                    </figure>
                    <div class="content-body ">
                        <h3>
                            شفافية ووضوح</h3>
                        <p>ما نحب مفردات التأمين المعقدة، ولا نحبها لعملائنا. لذلك دائماً نخلي تفاصيل وثيقة التأمين
                            واضحة وسهل أي شخص يفهمها.

                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 p-2">
                <div
                    class="content border border-1 d-flex justify-content-start p-2 rounded bg-white alien-items-center">
                    <figure class="content-img">
                        <img src="{{ asset('frontend') }}/assets/images/why-tameeny/gicon-04.png" alt="tameeny"
                            class="w-100">
                    </figure>
                    <div class="content-body ">
                        <h3>فريق فني وقانوني
                        </h3>
                        <p>نظام إننا نبيع وننساك مو من قاموسنا. جهزنا لك فريق فني وقانوني متمرس ومتخصص لأي استفسار أو
                            مشكلة صارت لك.

                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 p-2">
                <div
                    class="content border border-1 d-flex justify-content-start p-2 rounded bg-white alien-items-center">
                    <figure class="content-img">
                        <img src="{{ asset('frontend') }}/assets/images/why-tameeny/gicon-05.png" alt="tameeny"
                            class="w-100">
                    </figure>
                    <div class="content-body ">
                        <h3>
                            اختيارات متنوعه</h3>
                        <p>مع تأميني، صار شبه مستحيل ما تحصل اللي تبيه!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 p-2">
                <div
                    class="content border border-1 d-flex justify-content-start p-2 rounded bg-white alien-items-center">
                    <figure class="content-img ">
                        <img src="{{ asset('frontend') }}/assets/images/why-tameeny/gicon-06.png" alt="tameeny"
                            class="w-100">
                    </figure>
                    <div class="content-body ">
                        <h3>أسعارنا موحدة</h3>
                        <p> إذا أسعارنا ما كانت أقل من شركة التأمين، فهي راح تكون نفسها. بالضبط.. هذا نظامنا.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="tameeny-car">
    <div class="container">
        <h1 class="text-center">إيش هي التغطية التأمينية اللي اختارها للسيارة؟</h1>
        <p class="text-center">فيه تغطيتين رئيسيتين يقدمها موقع تأميني تقدر تختار واحدة منهم لتأمين سيارتك.</p>
        <div class="row">
            <div class="col-lg-6 p-2">
                <div class="content">
                    <div class="top d-flex justify-content-start align-items-center ">
                        <img src="{{ asset('frontend') }}/assets/images/tameeny-car/tpl-coverage-icon.svg" alt=""
                            class="w-25">
                        <h4 class="text-center me-5">تأمين ضد الغير (التأمين الإلزامي)</h4>
                    </div>
                    <p>التأمين ضد الغير للسيارات هو الحد الأدنى من مستوى التغطية التأمينية اللي تحتاجه للقيادة بشكل
                        قانوني على طرق المملكة. يغطي تأمين ضد الغير فقط تكلفة تعويض الآخرين عن الإصابات أو الأضرار التي
                        تسببتها في الحادث لا سمح الله ويحميك بإذن الله من المطالبات القانونية والتعويضات المالية
                        المستحقة للطرف الثالث. هذي التغطية لا توفر لك أي مساعدة أو تعويض مالي في حال إصابتك في الحادث أو
                        إصلاح سيارتك. للمزيد من التفاصيل عن التأمين ضد الغير</p>
                </div>
            </div>


            <div class="col-lg-6 p-2">
                <div class="content">
                    <div class="top d-flex justify-content-start align-items-center ">
                        <img src="{{ asset('frontend') }}/assets/images/tameeny-car/comp-coverage-icon.svg" alt=""
                            class="w-25">
                        <h4 class="text-center me-5">تأمين شامل</h4>

                    </div>
                    <p>التأمين الشامل للسيارة يوفر حماية وتغطية كاملة ضد الأضرار التي لحقت بسيارتك بسبب حادث. كما أن أي
                        تأمين شامل يشمل بشكل افتراضي التأمين ضد الغير. بالإضافة إلى ذلك توفر وثيقة التأمين الشامل تغطية
                        لسيارتك ضد الأضرار الناجمة عن الحريق، السرقة (بدون إهمال)، الكوارث الطبيعية (الفيضانات، البرد،
                        العواصف، وما إلى ذلك). للمزيد من التفاصيل عن التأمين الشامل

                        وبرضه فيه تغطيات تأمينية أخرى للسيارات نقدمها لك في تأميني وهي تغطيات تم تفصيلها وإضافة مزايا
                        خاصة فيها لتتناسب مع احتياجاتك وميزانيتك.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tameeny-price">
    <div class="container">
        <h2 class="text-center">إيش اللي يأثر على سعر وثيقة تأمين للسيارات؟</h2>
        <p class="text-center">كل شركة تأمين لها طريقتها وآليتها الخاصة في تسعير وثائق التأمين. لذلك هناك عوامل كثيرة
            تستخدمها شركات التأمين والتي تؤثر بدورها على سعر تأمين السيارة ومنها:</p>

        <div class="row justify-content-center mt-5">
            <div class="col-lg-3 col-md-4 col-sm-6 p-1">
                <div class="content p-4 border border-1 rounded text-center">
                    <figure class="d-flex justify-content-center">
                        <img src="{{ asset('frontend') }}/assets/images/tameeny-price/affects-icon1.png" alt=""
                            srcset="">
                    </figure>
                    <h4 class="text-center mt-3">السجل التأميني</h4>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 p-1">
                <div class="content p-4 border border-1 rounded text-center">
                    <figure class="d-flex justify-content-center">
                        <img src="{{ asset('frontend') }}/assets/images/tameeny-price/affects-icon2.png" alt=""
                            srcset="">
                    </figure>
                    <h4 class="text-center mt-3">عمر السائق</h4>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 p-1">
                <div class="content p-4 border border-1 rounded text-center">
                    <figure class="d-flex justify-content-center">
                        <img src="{{ asset('frontend') }}/assets/images/tameeny-price/affects-icon3.png" alt=""
                            srcset="">
                    </figure>
                    <h4 class="text-center mt-3">نوع السيارة</h4>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 p-1">
                <div class="content p-4 border border-1 rounded text-center">
                    <figure class="d-flex justify-content-center">
                        <img src="{{ asset('frontend') }}/assets/images/tameeny-price/affects-icon4.png" alt=""
                            srcset="">
                    </figure>
                    <h4 class="text-center mt-3">مدينة القيادة</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-1">
                <div class="content p-4 border border-1 rounded text-center ">
                    <figure class="d-flex justify-content-center">
                        <img src="{{ asset('frontend') }}/assets/images/tameeny-price/affects-icon5.png" alt="">
                    </figure>
                    <h4 class="text-center mt-3">الغرض من استخدام السيارة</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tameeny-app">
    <div class="container">
        <div class="row">
            <div class="col-md-7 p-2">
                <div class="content">
                    <h3> التأمين أسهل مع تطبيق تأميني</h3>
                    <ul class="mt-3">
                        <li class="d-flex align-items-center">
                            <img src="{{ asset('frontend') }}/assets/images/tameeny-app/mobile-app-icon1.svg">
                            <h4 class="me-2">مقارنة وشراء فوري لتأمين السيارات</h4>
                        </li>
                        <li class="d-flex align-items-center">
                            <img src="{{ asset('frontend') }}/assets/images/tameeny-app/mobile-app-icon2.svg">
                            <h4 class="me-2">مكان واحد تجمع فيه كل سياراتك وتتابع التأمين الخاص فيها</h4>
                        </li>
                        <li class="d-flex align-items-center">
                            <img src="{{ asset('frontend') }}/assets/images/tameeny-app/mobile-app-icon3.svg">
                            <h4 class="me-2">ما نخليك تفوت الإشعارات المهمة واللي نرسلها لك على جوالك كوقت تجديد التأمين
                            </h4>
                        </li>
                        <li class="d-flex align-items-center">
                            <img src="{{ asset('frontend') }}/assets/images/tameeny-app/mobile-app-icon4.svg">
                            <h4 class="me-2">متابعة لحظية لرفع وثيقة التأمين لنظام نجم/المرور</h4>
                        </li>
                        <li class="d-flex align-items-center">
                            <img src="{{ asset('frontend') }}/assets/images/tameeny-app/mobile-app-icon5.svg">
                            <h4 class="me-2">استعراض وتحميل بطاقة التأمين في أي وقت</h4>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection

@section('custom-script')
<script>
$(document).ready(function() {

    $("#accept_conditions").change(function() {
        var checked = $(this).is(":checked");
        if (checked) {
            $("#submit_button_1").attr("disabled", false)
        } else {
            $("#submit_button_1").attr("disabled", true)
        }
    });



});
var copy = document.querySelector(".logos-slide").cloneNode(true);
document.querySelector(".logos").appendChild(copy);
</script>
@endsection
