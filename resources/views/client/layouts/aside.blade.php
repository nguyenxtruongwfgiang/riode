<aside class="col-lg-3 sidebar sidebar-fixed sidebar-toggle-remain shop-sidebar sticky-sidebar-wrapper">
    <div class="sidebar-overlay"></div>
    <a class="sidebar-close" href="#"><i class="d-icon-times"></i></a>
    <div class="sidebar-content">
        <div class="sticky-sidebar" data-sticky-options="{'top': 10}">
            <div class="filter-actions mb-4">
                <a href="#"
                    class="sidebar-toggle-btn toggle-remain btn btn-outline btn-primary btn-rounded btn-icon-right">Filter<i
                        class="d-icon-arrow-left"></i></a>
                <a href="#" class="filter-clean">Clean All</a>
            </div>
            <div class="widget widget-collapsible">
                <h3 class="widget-title">All Brand</h3>
                <ul class="widget-body filter-items search-ul">
                    @foreach ($categories as $category)
                        <li><a href="#">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            {{-- <div class="widget widget-collapsible">
                <h3 class="widget-title">Filter by Price</h3>
                <div class="widget-body mt-3">
                    <form action="#">
                        <div class="filter-price-slider"></div>
                        <div class="filter-actions">
                            <div class="filter-price-text mb-4">Price:
                                <span class="filter-price-range"></span>
                            </div>
                            <button type="submit"
                                class="btn btn-dark btn-filter btn-rounded">Filter</button>
                        </div>
                    </form>
                </div>
            </div> --}}
            <div class="widget widget-collapsible">
                <h3 class="widget-title">Color</h3>
                <ul class="widget-body filter-items">
                    @foreach ($colors as $color)
                        <li><a href="#">{{ $color->display_name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</aside>
