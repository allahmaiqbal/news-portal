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
                            আনোয়ার সাদত জাহাঙ্গীর।
                        </span>
                    </p>
                    <p>
                        <span class="title fw-medium">
                            ব্যবস্থাপনা পরিচালকঃ
                        </span>
                        <span>
                            মোঃ শাহ আলম।
                        </span>
                    </p>
                </div>

                <div class="col-md-4 mb-4 d-print-none">
                    <h5 class="address mb-3">
                        <i class="fa-solid fa-location-dot me-2"></i>
                        ঠিকানাঃ
                    </h5>
                    <p class="mb-2">
                        <span class="title fw-medium">
                            প্রধান অফিস
                        </span>
                        <span>
                            ৩/১৬ মুক্তিযোদ্ধো কমপ্লেক্স,
                        </span>

                    </p>

                    <p class="mb-2">
                        চিড়িয়াখানা রোড,মিরপুর ঢাকা-১২১৬
                    </p>

                    <p class="mb-2">
                        <span class="title fw-medium">
                            শাখা অফিস,
                        </span>
                        <span>
                            দরগা মহল্লা রোড,
                        </span>

                    </p>

                    <p class="mb-2">
                        ত্রিশাল পৌরসভা,, ময়মনসিংহ
                    </p>
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
                            +৮৮০১৭১৫৮১৮৭৮৩
                        </a>
                    </p>

                    <p class="mb-2">
                        <span class="title fw-medium">
                            ইমেইলঃ
                        </span>
                        <a href="email:example@gmail.com">
                            example@gmail.com
                        </a>
                    </p>

                    <p class="mb-2">
                        <span class="title fw-medium">
                            ওয়েবসাইটঃ
                        </span>
                        <a href="rongdhonutvnews24.com" target="_blank">
                            rongdhonutvnews24.com
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
                    <a class="nav-link" href="/about.html">
                        আমাদের সম্পর্কে
                    </a>
                </li>
                <li class="nav-item mb-0">
                    <a class="nav-link" href="/terms.html">
                        গোপনীয়তা নীতি
                    </a>
                </li>
                <li class="nav-item mb-0">
                    <a class="nav-link" href="/contact.html">
                        যোগাযোগ
                    </a>
                </li>
            </ul>

            <p class="d-print-none" >&copy; 2023 News Portal. All rights reserved.</p>
        </div>

    </div>
</footer>
