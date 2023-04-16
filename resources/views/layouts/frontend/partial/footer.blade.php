<footer class="pt-5 pb-3">
    <div class="container">

        <div class="primary-footer">
            <div class="row">
                <div class="col-md-4 mb-4 d-print-none">
                    <img class="footer-logo mb-2" src="./resources/statics/frontend/img/logo.png" alt="">
                    <p class="short-desc mb-3">
                        সত্য সংবাদ প্রকাশে সাহসী। তথ্য দিন সাথে থাকুন
                    </p>
                    <p class="mb-2">
                        <span class="title fw-medium">
                            প্রধান সম্পাদকঃ
                        </span>
                        <span>
                           {{ $chiefEditor }}
                        </span>
                    </p>
                    <p>
                        <span class="title fw-medium">
                            ব্যবস্থাপনা পরিচালকঃ
                        </span>
                        <span>
                            {{ $managingDirector }}
                        </span>
                    </p>
                </div>

                <div class="col-md-4 mb-4 d-print-none">
                    <h5 class="address mb-3">
                        <i class="fa-solid fa-location-dot me-2"></i>
                        ঠিকানাঃ
                    </h5>
                    @foreach (explode('|', $address) as $email )
                    <p class="mb-2">
                        <span class="title fw-medium">
                        {{ $email }}
                        </span>
                    </p>
                    @endforeach
                </div>

                <div class="col-md-4 mb-4 d-print-none">
                    <h5 class="mb-3">
                        <i class="fa-solid fa-address-book"></i>
                        যোগাযোগঃ
                    </h5>

                    <p class="mb-2">
                        <span class="title fw-medium">
                            ফোনঃ
                        </span>
                        <a href="tel:+৮৮০১৭১৫৮১৮৭৮৩">
                            {{ $mobileNumber }}
                        </a>
                    </p>

                    <p class="mb-2">
                        <span class="title fw-medium">
                            ইমেইলঃ
                        </span>
                        <a href="email:example@gmail.com">
                            {{ $emailAddress }}
                        </a>
                    </p>

                    <p class="mb-2">
                        <span class="title fw-medium">
                            ওয়েবসাইটঃ
                        </span>
                        <a href="https://rongdhonu.tv/" target="_blank">
                        {{$sideName}}
                        </a>
                    </p>

                </div>
            </div>


            <ul class="footer-nav text-center d-flex flex-row justify-content-center border-bottom flex-wrap my-4">
                @foreach ($pages as $page )
                    <li class="nav-item d-print-none">
                        <a class="nav-link active" href="{{ route('category.pages',$page->slug) }}">
                        {{$page->name}}
                        </a>
                    </li>
                @endforeach

            </ul>
        </div>

        <div class="secondary-footer d-flex align-items-center justify-content-between ">
            <ul class="footer-nav d-flex flex-row flex-wrap d-print-none">
                <li class="nav-item mb-0">
                    <a class="nav-link" href="{{ route('about-us.page') }}">
                        আমাদের সম্পর্কে
                    </a>
                </li>
                <li class="nav-item mb-0">
                    <a class="nav-link" href="{{ route('terms.page') }}">
                        গোপনীয়তা নীতি
                    </a>
                </li>
                <li class="nav-item mb-0">
                    <a class="nav-link" href="{{ route('contact-us.page') }}">
                        যোগাযোগ
                    </a>
                </li>
            </ul>

            <p class="d-print-none" >&copy; 2023 rongdhonu.tv. All rights reserved.</p>
        </div>

    </div>
</footer>
