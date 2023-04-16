@extends('layouts.appPortal')
@section('content')

<div class="hero-wrap" style="background-image: url('images/bg_1.jpg'); background-attachment:fixed;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <h1 class="mb-4">مركز جهات للتدريب <p>مركز معتمد من المؤسسة العامة للتدريب التقني و المهني ومعتمد من المركز الوطني للتعليم الالكتروني</p></h1>
            <p><a href="#" class="btn btn-primary px-4 py-3">دخول المتدرب </a> <a href="#" class="btn btn-secondary px-4 py-3">الطلب السريع </a></p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-search-course">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="courseSearch-wrap d-md-flex flex-column-reverse">
    					<div class="full-wrap d-flex ftco-animate">
    						<div class="one-third order-last p-5">
    							<span>هل تعرف ما الذي تبحث عنه؟</span>
    							<h3>اريد ان اتعلم</h3>
    							<form action="#" class="course-search-form">
		                <div class="form-group d-flex">
		                  <input type="text" class="form-control" placeholder="اكتب الدورة التي تريد تعلمها">
		                  <input type="submit" value="بحث" class="submit">
		                </div>
		              </form>
		              <p>هل تريد التصفح؟ <a href="#"> شاهد جميع الدورات</a></p>
    						</div>
    						<div class="one-forth order-first img" style="background-image: url(images/image_1.jpg);"></div>
    					</div>
    					<div class="full-wrap ftco-animate">
    						<div class="one-half">
    							<div class="featured-blog d-md-flex">
    								<div class="image d-flex order-last">
    									<a href="#" class="img" style="background: url(images/image_2.jpg);"></a>
    								</div>
    								<div class="text order-first">
    									<span class="date">مارس 20, 2023</span>
    									<h3><a href="#">مهارات اخصائي محاسب مالي</a></h3>
											<p>معتمدة من المؤسسة العامة للتدريب التقني والمهني</p>
    								</div>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-3 py-4 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center mb-3"><span class="flaticon-exam"></span></div>
              <div class="media-body px-3">
                <h3 class="heading">ورش عمل </h3>
                <p> يقدم مركز جهات العديد من الدورات وورش العمل حيث يقدم بعض الفعاليات ومعسكرات للتدريب لتأهيل المتدرب وزيادة كفاءته</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-3 py-4 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center mb-3"><span class="flaticon-blackboard"></span></div>
              <div class="media-body px-3">
                <h3 class="heading">فيديو تعليمي</h3>
                <p>يقدم مركز جهات مقاطع تعليميه توضح العديد من اللغات وغيرها بصورة مبسطه وواضحه للمتدرب</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-3 py-4 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center mb-3"><span class="flaticon-books"></span></div>
              <div class="media-body px-3">
                <h3 class="heading">مكتبتنا </h3>
                <p> يقدم مركز جهات الكتب العلميه والثقافيه والكتب التقنية والمهنيه والعديد من الكتب الاخرى التي تزيد من حصيلة فهم المتدرب وتكسبه العديد من المهارات </p>
              </div>
            </div>    
          </div>
        </div>
    	</div>
    </section>


    <section class="ftco-section-3 img" style="background-image: url(images/bg_3.jpg);">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row d-md-flex justify-content-center">
    			<div class="col-md-9 about-video text-center">
    				<h2 class="ftco-animate">نحن نستخدم احدث التقنيات العالمية ولدينا مدربين بكفائات عالية </h2>
    				<div class="video d-flex justify-content-center">
    					<a href="https://vimeo.com/45830194" class="button popup-vimeo d-flex justify-content-center align-items-center"><span class="ion-ios-play"></span></a>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <section class="ftco-counter bg-light" id="section-counter">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="10300">0</strong>
		                <span>دورة سنوياً</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="7896">0</strong>
		                <span>متدرب سنوياً</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="400">0</strong>
		                <span>دورة تدريبة</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="200">0</strong>
		                <span>مدرب</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section testimony-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4"> ماذا يقول طالبنا</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-12 ftco-animate">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap text-center">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5"> التدريب في مركز جهات للتدريب رائع جدا ومفيد ، حيث استفدت منه بشكل شخصي واصبح لدي حصيله معرفيه كبيره من المعلومات التقنيه التي وفرها لنا المركز .  </p>
                    <p class="name"> محمد صلاح</p>
                    <span class="position">طالب في مركز جهات</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center">
                  <div class="user-img mb-5" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">التدريب في مركز جهات للتدريب  مفيد جدا، حيث عاد علي بالنفع واصبح لدي حصيله معرفيه كبيره من المعلومات التقنيه التي وفرها لنا المركز . وطريقه التعليم معتمدة وقويه.</p>
                    <p class="name">سالم احمد</p>
                    <span class="position">طالب في مركز جهات </span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center">
                  <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">التدريب في مركز جهات للتدريب مفيد لي جدا  ، حيث استفدت منه بشكل كبير واصبح لدي حصيله معرفيه كبيره من المعلومات  التي وفرها لنا المركز . واصبحت اكثر انتاجيه في عملي.</p>
                    <p class="name">عبدالاله صالح</p>
                    <span class="position">طالب في مركز جهات </span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center">
                  <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">التدريب في مركز جهات للتدريب ممتاز و مفيد جدا، حيث طريقه التعليم لديهم معتمدة وقويه. ولهذا عاد علي بالنفع واصبح لدي حصيله معرفيه كبيره من المعلومات التقنيه التي وفرها لنا المركز . </p>
                    <p class="name">يحيى خالد</p>
                    <span class="position">طالب في مركز جهات</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">فريق العمل</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-lg-4 mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url(images/person_1.jpg);"></div>
        				<div class="info ml-4">
        					<h3><a href="teacher-single.html">الدكتور محمد عبدلله </a></h3>
        					<span class="position">معلم علوم الحاسب</span>
        					<p class="ftco-social d-flex">
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a>
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a>
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a>
		              </p>
        				</div>
        			</div>
        			<div class="text">
        				<p>حاصل على شهادة الماجستير في تخصص علوم الحاسب مع مرتبة الشرف الثانية في جامعة هارفارد ، وشهادة معتمدة من معهد الملك خالد</p>
        			</div>
        		</div>
        	</div>
        	<div class="col-lg-4 mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url(images/person_2.jpg);"></div>
        				<div class="info ml-4">
        					<h3><a href="teacher-single.html">الدكتور يحيى صلاح</a></h3>
        					<span class="position">معلم امن المعلومات</span>
        					<p class="ftco-social d-flex">
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a>
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a>
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a>
		              </p>
        				</div>
        			</div>
        			<div class="text">
        				<p>حاصل على شهادة الدكتوراه في تخصص التقنيه وامن المعلومات مع مرتبة الشرف الاولى في جامعة الملك سعود ، وشهادة معتمدة من معهد الادراة العامة</p>
        			</div>
        		</div>
        	</div>
        	<div class="col-lg-4 mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url(images/person_3.jpg);"></div>
        				<div class="info ml-4">
        					<h3><a href="teacher-single.html">الدكتور احمد بدر</a></h3>
        					<span class="position">معلم التكنولوجيا وامن المعلومات</span>
        					<p class="ftco-social d-flex">
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a>
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a>
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a>
		              </p>
        				</div>
        			</div>
        			<div class="text">
        				<p>حاصل على شهادة الماجستير في تخصص التكنولوجيا وامن المعلومات مع مرتبة الشرف الاولى في جامعة الفيصل ، وشهادة معتمدة من معهد الامير خالد الفيصل </p>
        			</div>
        		</div>
        	</div>
        </div>
      </div>
    </section>

    <section class="ftco-freeTrial">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="d-flex align-items-center">
			    		<div class="free-trial ftco-animate">
			    			<h3>تصفح دوراتنا المجانية</h3>
			    			<p>دورتنا المجانية تتيح لك الفرصه لتعلم المزيد</p>
			    		</div>
			    		<div class="btn-join ftco-animate">
			    			<p><a href="#" class="btn btn-primary py-3 px-4">تصفح الآن</a></p>
			    		</div>
			    	</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">دوراتنا </h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-4 d-flex ftco-animate">
    				<div class="course align-self-stretch">
    					<a href="#" class="img" style="background-image: url(images/course-1.jpg)"></a>
    					<div class="text p-4">
    						<p class="category"><span>اللغة الانجليزية</span></p>
    						<h3 class="mb-3"><a href="#">المستوى الأول </a></h3>
    						<p>في مركز جهات نساعدك على اكتساب الثقة وتحسين التحدث والنطق ومفردات اللغة الإنجليزية. نوفر لك فصول أونلاين جماعية صغيرة وفصول فردية خاصة
                  بإمكانك اختيار وقت الدورة حسب جدولك الزمني، واختيار الفصول بنا ًء على أهدافك واهتماماتك. حدد مستواك وابدأ معنا. من الصفر الى الاحتراف.</p>
    						<p><a href="#" class="btn btn-primary">سجل الآن</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex ftco-animate">
    				<div class="course align-self-stretch">
    					<a href="#" class="img" style="background-image: url(images/course-2.jpg)"></a>
    					<div class="text p-4">
    						<p class="category"><span>حاسب آلي</span></p>
    						<h3 class="mb-3"><a href="#">برامج الأوفيس</a></h3>
    						<p>من خلال كورس ميكروسوفت أوفيس سنتناول بالتفصيل أهم التعريفات في الإكسيل والوورد وكذلك الباور بونيت والأوتلوك، كما سنقوم بشرح وافي لأهم المعدلات المستخدمة في الإكسيل،
                   وكذلك طريقة استخدام الشرائح التقديمية في الباور بوينت، وآلية كتابة المستندات بشكل احترافي، واستخدام البريد الإلكتروني كذلك.</p>
    						<p><a href="#" class="btn btn-primary">سجل الآن</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex ftco-animate">
    				<div class="course align-self-stretch">
    					<a href="#" class="img" style="background-image: url(images/course-3.jpg)"></a>
    					<div class="text p-4">
    						<p class="category"><span>ادارة اعمال</span></p>
    						<h3 class="mb-3"><a href="#">ادارة اعمال</a></h3>
    						<p>برنامج تدريبي متقدم يهدف لتأهيل المشاركين على المفاهيم والتطبيقات الحديثة في إدارة الأعمال، ومساعدتهم في الوصول إلى الوظائف القيادية العليا في الشركات،
                   كما أنه يساعد الأفراد الراغبين في تغيير مسارهم المهني الى مجال "إدارة الأعمال"، اذ يقدم هذا البرنامج التدريبي مادة علمية وتطبيقات صممت خصيصاً لهذا الغرض، كذلك يساعد العاملين في المجال الإداري على صقل مهاراتهم وترقية معارفهم وخبراتهم في مجال إدارة الأعمال.</p>
    						<p><a href="#" class="btn btn-primary">سجل الان </a></p>
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="row justify-content-center mt-5">
        	<div class="col-md-10 ftco-animate">
        		<p><strong>تتميز مركز جهات للتدريب</strong>  بتقديم محتوى تدريبي احترافي يجمع بين النظريات العلمية والتطبيق العملي في الشركات العربية </p>
        		<p><span>تريد تصفح الدورات الاخرى؟</span><a href="course.html"> عرض جميع الدوارت</a></p>
        	</div>
        </div>
    	</div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">آخر الاخبار</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">يوليو 12, 2019</a></div>
                  <div><a href="#">المسؤول</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 9</a></div>
                </div>
                <h3 class="heading mt-3"><a href="#">كيف تكون متميزًا في بداية حياتك المهنية في تجربة المستخدم</a></h3>
                <p>تتمثل الخطوة الأولى في إدراك أن جميع أدوار تجربة المستخدم موجودة حتى تخدم عملية التصميم، لذا فإن أفضل طريقة لفهمها هي في فهم كيف تساهم في عملية التصميم، أي أننا أثناء عملية التصميم سنحتاج إلى أن ننفذ عددًا كبيرًا من المهام المتعلقة بتجربة المستخدم قبل أن نصل إلى التصميم النهائي</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">يونيو 12, 2022</a></div>
                  <div><a href="#">المسؤول</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 19</a></div>
                </div>
                <h3 class="heading mt-3"><a href="#">ماهي أساليب تحسين محركات البحث وتطوير موقعك الإلكتروني </a></h3>
                <p>الـ SEO هو اختصار لجملة Search Engine Optimization، أو "تحسين محركات البحث" ويعبّر عن الممارسات التي تهدف إلى زيادة ورفع جودة حركة مرور الويب (عدد الزيارات إلى موقع إلكتروني معيّن)، وذلك من خلال نتائج البحث غير المدفوعة على محركات البحث، ما يعرف بالـ "Organic Search Results" أيّ البحث الاعتيادي غير المدفوع تصفح على موقع فرصة</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">فبراير 12, 2021</a></div>
                  <div><a href="#">المسؤول</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 8</a></div>
                </div>
                <h3 class="heading mt-3"><a href="#">ماهي تجربة المستخدم والتفكير التصميمي؟</a></h3>
                <p>يعني مصطلح التفكير التصميمي التفكير التصميمي  تلك العملية التكرارية التي تهدف إلى حل مشكلة ما متعلقة بالمستخدم، وهي تمر بخمسة مراحل: التعاطف ، تعريف المشكلة ، توليد الأفكار ، النماذج ،الاختبار </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">الفعاليات </h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/event-1.jpg');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">سبتمبر. 10, 2022</a></div>
                  <div><a href="#">المسؤول</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 6</a></div>
                </div>
                <h3 class="heading mb-4"><a href="#">لقاء المعسكر التدريبي المتدرب 2022</a></h3>
                <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30 صباحًا -03:30 ليلًا</span> <span><i class="icon-map-o"></i> المكان في مركز جهات الرئيسي</span></p>
                <p> معسكر تدريبي مكثف لتطوير تطبيقات الجوال والويب باستخدام إطار عمل Flutter، والذي يعتبر الإطار الأحدث والأسهل لبناء تطبيقات تعمل على عدة أنظمة.</p>
                <p><a href="event.html">الانضمام الى الحدث  <i class="ion-ios-arrow-forward"></i></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry d-flex align-self-stretch flex-column-reverse">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/event-2.jpg');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">يناير. 10, 2021</a></div>
                  <div><a href="#">المسؤول </a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 15</a></div>
                </div>
                <h3 class="heading mb-4"><a href="#">معسكر تطوير مواقع الويب باستخدام لغة JAVA</a></h3>
                <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i>  10:30 صباحًا -03:30 ليلًا </span> <span><i class="icon-map-o"></i> المكان في مركز جهات الرئيسي</span></p>
                <p> معسكر يهدف إلى تطوير وبناء تطبيقات ويب تفاعلية باستخدام لغة Java تحت إطار Spring boot، حيث يمكنك بدء رحلتك التعليمية بتعلم أساسيات لغة Java.</p>
                <p><a href="event.html">الانضمام الى الحدث <i class="ion-ios-arrow-forward"></i></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/event-3.jpg');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">مارس. 10, 2023</a></div>
                  <div><a href="#">المسؤول</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mb-4"><a href="#">معسكر تطوير تطبيقات الهواتف الذكية باستخدام لغة Swift</a></h3>
                <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i>  10:30 صباحًا -03:30 ليلًا </span> <span><i class="icon-map-o"></i> المكان في مركز جهات الرئيسي</span></p>
                <p>معسكر برمجي يهدف إلى تمكين المتدربين من تطوير التطبيقات على مختلف منصات Apple، باستخدام لغة Swift وإطار عمل SwiftUI.</p>
                <p><a href="event.html">الانضمام الى الحدث <i class="ion-ios-arrow-forward"></i></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>قدم الان في مركزنا التدريبي </h2>
              <p>معنا سوف تكتسب الخبرة المعرفية حول التقنية ، حيث سيكون لديك الخبرة الكافية في المجال التقني والمهني   </p>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="ادخل البريد الالكتروني ">
                      <input type="submit" value="اشترك الان" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endsection