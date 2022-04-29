<?php include("./group/group_info.php"); ?>
<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>作品廊</h2>
            <p>各專題組 製作成果</p>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">全部</li>
                    <li data-filter=".filter-education">教學發展</li>
                    <li data-filter=".filter-design">產品設計</li>
                </ul>
            </div>
        </div>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo($demo_filter); ?>">
                <div class="portfolio-wrap"> 
                    <a href="<?php echo($demo_link) ?>">
                        <img src="<?php echo($demo_cover); ?>" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4><?php echo($demo_title); ?></h4>
                            <p><?php echo($demo_category); ?></p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo($g01_filter); ?>">
                <div class="portfolio-wrap"> 
                    <a href="<?php echo($demo_link) ?>">
                        <img src="<?php echo($g01_cover); ?>" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4><?php echo($g01_title); ?></h4>
                            <p><?php echo($g01_category); ?></p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo($g02_filter); ?>">
                <div class="portfolio-wrap"> 
                    <img src="<?php echo($g02_cover); ?>" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><?php echo($g02_title); ?></h4>
                        <p><?php echo($g02_category); ?></p>
                        <div class="portfolio-links"> 
                            <a href="<?php echo($g02_cover); ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo($g02_title); ?>">
                                <i class="bx bx-plus"></i>
                            </a> 
                            <a href="template/portfolio-details.html" title="More Details">
                                <i class="bx bx-link"></i>
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo($g03_filter); ?>">
                <div class="portfolio-wrap"> 
                    <img src="<?php echo($g03_cover); ?>" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><?php echo($g03_title); ?></h4>
                        <p><?php echo($g03_category); ?></p>
                        <div class="portfolio-links"> 
                            <a href="<?php echo($g03_cover); ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo($g03_title); ?>">
                                <i class="bx bx-plus"></i>
                            </a> 
                            <a href="template/portfolio-details.html" title="More Details">
                                <i class="bx bx-link"></i>
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo($g04_filter); ?>">
                <div class="portfolio-wrap"> 
                    <img src="<?php echo($g04_cover); ?>" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><?php echo($g04_title); ?></h4>
                        <p><?php echo($g04_category); ?></p>
                        <div class="portfolio-links"> 
                            <a href="<?php echo($g04_cover); ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo($g04_title); ?>">
                                <i class="bx bx-plus"></i>
                            </a> 
                            <a href="template/portfolio-details.html" title="More Details">
                                <i class="bx bx-link"></i>
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo($g05_filter); ?>">
                <div class="portfolio-wrap"> 
                    <img src="<?php echo($g05_cover); ?>" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><?php echo($g05_title); ?></h4>
                        <p><?php echo($g05_category); ?></p>
                        <div class="portfolio-links"> 
                            <a href="<?php echo($g05_cover); ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo($g05_title); ?>">
                                <i class="bx bx-plus"></i>
                            </a> 
                            <a href="template/portfolio-details.html" title="More Details">
                                <i class="bx bx-link"></i>
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo($g06_filter); ?>">
                <div class="portfolio-wrap"> 
                    <img src="<?php echo($g06_cover); ?>" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><?php echo($g06_title); ?></h4>
                        <p><?php echo($g06_category); ?></p>
                        <div class="portfolio-links"> 
                            <a href="<?php echo($g06_cover); ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo($g06_title); ?>">
                                <i class="bx bx-plus"></i>
                            </a> 
                            <a href="template/portfolio-details.html" title="More Details">
                                <i class="bx bx-link"></i>
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo($g07_filter); ?>">
                <div class="portfolio-wrap"> 
                    <img src="<?php echo($g07_cover); ?>" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><?php echo($g07_title); ?></h4>
                        <p><?php echo($g07_category); ?></p>
                        <div class="portfolio-links"> 
                            <a href="<?php echo($g07_cover); ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo($g07_title); ?>">
                                <i class="bx bx-plus"></i>
                            </a> 
                            <a href="template/portfolio-details.html" title="More Details">
                                <i class="bx bx-link"></i>
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo($g08_filter); ?>">
                <div class="portfolio-wrap"> 
                    <img src="<?php echo($g08_cover); ?>" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><?php echo($g08_title); ?></h4>
                        <p><?php echo($g08_category); ?></p>
                        <div class="portfolio-links"> 
                            <a href="<?php echo($g08_cover); ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo($g08_title); ?>">
                                <i class="bx bx-plus"></i>
                            </a> 
                            <a href="template/portfolio-details.html" title="More Details">
                                <i class="bx bx-link"></i>
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo($g09_filter); ?>">
                <div class="portfolio-wrap"> 
                    <img src="<?php echo($g09_cover); ?>" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><?php echo($g09_title); ?></h4>
                        <p><?php echo($g09_category); ?></p>
                        <div class="portfolio-links"> 
                            <a href="<?php echo($g09_cover); ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo($g09_title); ?>">
                                <i class="bx bx-plus"></i>
                            </a> 
                            <a href="template/portfolio-details.html" title="More Details">
                                <i class="bx bx-link"></i>
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo($g10_filter); ?>">
                <div class="portfolio-wrap"> 
                    <img src="<?php echo($g10_cover); ?>" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><?php echo($g10_title); ?></h4>
                        <p><?php echo($g10_category); ?></p>
                        <div class="portfolio-links"> 
                            <a href="<?php echo($g10_cover); ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo($g10_title); ?>">
                                <i class="bx bx-plus"></i>
                            </a> 
                            <a href="template/portfolio-details.html" title="More Details">
                                <i class="bx bx-link"></i>
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo($g11_filter); ?>">
                <div class="portfolio-wrap"> 
                    <img src="<?php echo($g11_cover); ?>" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><?php echo($g11_title); ?></h4>
                        <p><?php echo($g11_category); ?></p>
                        <div class="portfolio-links"> 
                            <a href="<?php echo($g11_cover); ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo($g11_title); ?>">
                                <i class="bx bx-plus"></i>
                            </a> 
                            <a href="template/portfolio-details.html" title="More Details">
                                <i class="bx bx-link"></i>
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo($g12_filter); ?>">
                <div class="portfolio-wrap"> 
                    <img src="<?php echo($g12_cover); ?>" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><?php echo($g12_title); ?></h4>
                        <p><?php echo($g12_category); ?></p>
                        <div class="portfolio-links"> 
                            <a href="<?php echo($g12_cover); ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo($g12_title); ?>">
                                <i class="bx bx-plus"></i>
                            </a> 
                            <a href="template/portfolio-details.html" title="More Details">
                                <i class="bx bx-link"></i>
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo($g13_filter); ?>">
                <div class="portfolio-wrap"> 
                    <img src="<?php echo($g13_cover); ?>" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><?php echo($g13_title); ?></h4>
                        <p><?php echo($g13_category); ?></p>
                        <div class="portfolio-links"> 
                            <a href="<?php echo($g13_cover); ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo($g13_title); ?>">
                                <i class="bx bx-plus"></i>
                            </a> 
                            <a href="template/portfolio-details.html" title="More Details">
                                <i class="bx bx-link"></i>
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
