<?php

return [
    'acl' => [
        'leads'           => 'سرنخ‌ها',
        'lead'            => 'سرنخ',
        'quotes'          => 'پیشنهادات',
        'mail'            => 'ایمیل',
        'inbox'           => 'صندوق ورودی',
        'draft'           => 'پیش‌نویس',
        'outbox'          => 'صندوق خروجی',
        'sent'            => 'ارسال شده',
        'trash'           => 'زباله‌دان',
        'activities'      => 'فعالیت‌ها',
        'webhook'         => 'وب‌هوک',
        'contacts'        => 'مخاطبین',
        'persons'         => 'افراد',
        'organizations'   => 'سازمان‌ها',
        'products'        => 'محصولات',
        'settings'        => 'تنظیمات',
        'groups'          => 'گروه‌ها',
        'roles'           => 'نقش‌ها',
        'users'           => 'کاربران',
        'user'            => 'کاربر',
        'automation'      => 'اتوماسیون',
        'attributes'      => 'ویژگی‌ها',
        'pipelines'       => 'لوله‌ها',
        'sources'         => 'منابع',
        'types'           => 'انواع',
        'email-templates' => 'قالب‌های ایمیل',
        'workflows'       => 'جریان‌کار',
        'other-settings'  => 'سایر تنظیمات',
        'tags'            => 'برچسب‌ها',
        'configuration'   => 'پیکربندی',
        'campaigns'       => 'کمپین‌ها',
        'event'           => 'رویداد',
        'create'          => 'ایجاد',
        'edit'            => 'ویرایش',
        'view'            => 'نمایش',
        'print'           => 'چاپ',
        'delete'          => 'حذف',
        'export'          => 'صادر کردن',
        'mass-delete'     => 'حذف انبوه',
    ],

    'users' => [
        'activate-warning' => 'حساب شما هنوز فعال نشده است. لطفاً با مدیر سیستم تماس بگیرید.',
        'login-error'      => 'اطلاعات وارد شده با سوابق ما مطابقت ندارد.',

        'login' => [
            'email'                => 'آدرس ایمیل',
            'forget-password-link' => 'فراموشی رمز عبور؟',
            'password'             => 'رمز عبور',
            'submit-btn'           => 'ورود',
            'title'                => 'ورود',
        ],

        'forget-password' => [
            'create' => [
                'email'           => 'ایمیل ثبت‌شده',
                'email-not-exist' => 'ایمیل وجود ندارد',
                'page-title'      => 'فراموشی رمز عبور',
                'reset-link-sent' => 'لینک بازنشانی رمز عبور ارسال شد',
                'sign-in-link'    => 'بازگشت به ورود؟',
                'submit-btn'      => 'بازنشانی',
                'title'           => 'بازیابی رمز عبور',
            ],
        ],

        'reset-password' => [
            'back-link-title'  => 'بازگشت به ورود؟',
            'confirm-password' => 'تأیید رمز عبور',
            'email'            => 'ایمیل ثبت‌شده',
            'password'         => 'رمز عبور',
            'submit-btn'       => 'بازنشانی رمز عبور',
            'title'            => 'بازنشانی رمز عبور',
        ],
    ],

    'account' => [
        'edit' => [
            'back-btn'          => 'بازگشت',
            'change-password'   => 'تغییر رمز عبور',
            'confirm-password'  => 'تایید رمز عبور',
            'current-password'  => 'رمز عبور فعلی',
            'email'             => 'ایمیل',
            'general'           => 'عمومی',
            'invalid-password'  => 'رمز عبور فعلی شما نادرست است.',
            'name'              => 'نام',
            'password'          => 'رمز عبور',
            'profile-image'     => 'تصویر پروفایل',
            'save-btn'          => 'ذخیره حساب کاربری',
            'title'             => 'حساب من',
            'update-success'    => 'حساب کاربری با موفقیت به‌روزرسانی شد',
            'upload-image-info' => 'آپلود یک تصویر پروفایل (110px X 110px) در فرمت PNG یا JPG',
        ],
    ],

    'components' => [
        'activities' => [
            'actions' => [
                'mail' => [
                    'btn'          => 'ایمیل',
                    'title'        => 'نگارش ایمیل',
                    'to'           => 'به',
                    'enter-emails' => 'برای افزودن ایمیل‌ها اینتر را فشار دهید',
                    'cc'           => 'کپی',
                    'bcc'          => 'کپی مخفی',
                    'subject'      => 'موضوع',
                    'send-btn'     => 'ارسال',
                    'message'      => 'پیام',
                ],

                'file' => [
                    'btn'           => 'فایل',
                    'title'         => 'افزودن فایل',
                    'title-control' => 'عنوان',
                    'name'          => 'نام',
                    'description'   => 'توضیحات',
                    'file'          => 'فایل',
                    'save-btn'      => 'ذخیره فایل',
                ],

                'note' => [
                    'btn'      => 'یادداشت',
                    'title'    => 'افزودن یادداشت',
                    'comment'  => 'نظر',
                    'save-btn' => 'ذخیره یادداشت',
                ],

                'activity' => [
                    'btn'           => 'فعالیت',
                    'title'         => 'افزودن فعالیت',
                    'title-control' => 'عنوان',
                    'description'   => 'توضیحات',
                    'schedule-from' => 'زمان‌بندی از',
                    'schedule-to'   => 'زمان‌بندی تا',
                    'location'      => 'محل',
                    'call'          => 'تماس',
                    'meeting'       => 'جلسه',
                    'lunch'         => 'ناهار',
                    'save-btn'      => 'ذخیره فعالیت',

                    'participants' => [
                        'title'       => 'شرکت‌کنندگان',
                        'placeholder' => 'برای جستجوی شرکت‌کنندگان تایپ کنید',
                        'users'       => 'کاربران',
                        'persons'     => 'افراد',
                        'no-results'  => 'هیچ نتیجه‌ای یافت نشد...',
                    ],
                ],
            ],

            'index' => [
                'from'         => 'از',
                'to'           => 'تا',
                'cc'           => 'کپی',
                'bcc'          => 'کپی مخفی',
                'all'          => 'همه',
                'planned'      => 'برنامه‌ریزی شده',
                'calls'        => 'تماس‌ها',
                'meetings'     => 'جلسات',
                'lunches'      => 'ناهارها',
                'files'        => 'فایل‌ها',
                'quotes'       => 'نقل قول‌ها',
                'notes'        => 'یادداشت‌ها',
                'emails'       => 'ایمیل‌ها',
                'change-log'   => 'تغییرات',
                'by-user'      => 'توسط :user',
                'scheduled-on' => 'برنامه‌ریزی شده در',
                'location'     => 'محل',
                'participants' => 'شرکت‌کنندگان',
                'mark-as-done' => 'علامت زدن به عنوان انجام شده',
                'delete'       => 'حذف',
                'edit'         => 'ویرایش',
                'view'         => 'مشاهده',
                'unlink'       => 'لغو پیوند',
                'empty'        => 'خالی',

                'empty-placeholders' => [
                    'all' => [
                        'title'       => 'هیچ فعالیتی یافت نشد',
                        'description' => 'هیچ فعالیتی برای این یافت نشد. می‌توانید فعالیت‌ها را با کلیک روی دکمه در پنل سمت چپ اضافه کنید.',
                    ],

                    'planned' => [
                        'title'       => 'هیچ فعالیت برنامه‌ریزی شده‌ای یافت نشد',
                        'description' => 'هیچ فعالیت برنامه‌ریزی شده‌ای برای این یافت نشد. می‌توانید فعالیت‌های برنامه‌ریزی شده را با کلیک روی دکمه در پنل سمت چپ اضافه کنید.',
                    ],

                    'notes' => [
                        'title'       => 'هیچ یادداشتی یافت نشد',
                        'description' => 'هیچ یادداشتی برای این یافت نشد. می‌توانید یادداشت‌ها را با کلیک روی دکمه در پنل سمت چپ اضافه کنید.',
                    ],

                    'calls' => [
                        'title'       => 'هیچ تماسی یافت نشد',
                        'description' => 'هیچ یادداشتی برای این یافت نشد. می‌توانید یادداشت‌ها را با کلیک روی دکمه در پنل سمت چپ اضافه کنید.',
                    ],

                    'meetings' => [
                        'title'       => 'هیچ جلسه‌ای یافت نشد',
                        'description' => 'هیچ جلسه‌ای برای این یافت نشد. می‌توانید جلسات را با کلیک روی دکمه در پنل سمت چپ اضافه کنید.',
                    ],

                    'lunches' => [
                        'title'       => 'هیچ ناهاری یافت نشد',
                        'description' => 'هیچ ناهاری برای این یافت نشد. می‌توانید ناهارها را با کلیک روی دکمه در پنل سمت چپ اضافه کنید.',
                    ],

                    'files' => [
                        'title'       => 'هیچ فایلی یافت نشد',
                        'description' => 'هیچ فایلی برای این یافت نشد. می‌توانید فایل‌ها را با کلیک روی دکمه در پنل سمت چپ اضافه کنید.',
                    ],

                    'emails' => [
                        'title'       => 'هیچ ایمیلی یافت نشد',
                        'description' => 'هیچ ایمیلی برای این یافت نشد. می‌توانید ایمیل را با کلیک روی دکمه در پنل سمت چپ اضافه کنید.',
                    ],

                    'system' => [
                        'title'       => 'هیچ گزارش تغییری یافت نشد',
                        'description' => 'هیچ گزارش تغییری برای این یافت نشد.',
                    ],
                ],
            ],
        ],

        'media' => [
            'images' => [
                'add-image-btn'     => 'افزودن تصویر',
                'ai-add-image-btn'  => 'هوش مصنوعی جادویی',
                'allowed-types'     => 'png, jpeg, jpg',
                'not-allowed-error' => 'فقط فایل‌های تصویری (.jpeg, .jpg, .png, ..) مجاز هستند.',

                'placeholders' => [
                    'front'     => 'جلو',
                    'next'      => 'بعدی',
                    'size'      => 'اندازه',
                    'use-cases' => 'موارد استفاده',
                    'zoom'      => 'بزرگنمایی',
                ],
            ],

            'videos' => [
                'add-video-btn'     => 'افزودن ویدیو',
                'allowed-types'     => 'mp4, webm, mkv',
                'not-allowed-error' => 'فقط فایل‌های ویدیویی (.mp4, .mov, .ogg ..) مجاز هستند.',
            ],
        ],

        'datagrid' => [
            'index' => [
                'no-records-selected'              => 'هیچ رکوردی انتخاب نشده است.',
                'must-select-a-mass-action-option' => 'باید یک گزینه از اقدامات انبوه را انتخاب کنید.',
                'must-select-a-mass-action'        => 'باید یک اقدام انبوه را انتخاب کنید.',
            ],

            'toolbar' => [
                'length-of' => ':length از',
                'of'        => 'از',
                'per-page'  => 'در هر صفحه',
                'results'   => ':total نتایج',
                'delete'    => 'حذف',
                'selected'  => ':total موارد انتخاب شده',

                'mass-actions' => [
                    'submit'        => 'ارسال',
                    'select-option' => 'انتخاب گزینه',
                    'select-action' => 'انتخاب اقدام',
                ],

                'filter' => [
                    'apply-filters-btn' => 'اعمال فیلترها',
                    'back-btn'          => 'بازگشت',
                    'create-new-filter' => 'ایجاد فیلتر جدید',
                    'custom-filters'    => 'فیلترهای سفارشی',
                    'delete-error'      => 'خطایی در هنگام حذف فیلتر رخ داد، لطفاً دوباره تلاش کنید.',
                    'delete-success'    => 'فیلتر با موفقیت حذف شد.',
                    'empty-description' => 'هیچ فیلتری برای ذخیره انتخاب نشده است. لطفاً فیلترها را برای ذخیره انتخاب کنید.',
                    'empty-title'       => 'افزودن فیلترها برای ذخیره',
                    'name'              => 'نام',
                    'quick-filters'     => 'فیلترهای سریع',
                    'save-btn'          => 'ذخیره',
                    'save-filter'       => 'ذخیره فیلتر',
                    'saved-success'     => 'فیلتر با موفقیت ذخیره شد.',
                    'selected-filters'  => 'فیلترهای انتخاب شده',
                    'title'             => 'فیلتر',
                    'update'            => 'به‌روزرسانی',
                    'update-filter'     => 'به‌روزرسانی فیلتر',
                    'updated-success'   => 'فیلتر با موفقیت به‌روزرسانی شد.',
                ],

                'search' => [
                    'title' => 'جستجو',
                ],
            ],

            'filters' => [
                'select' => 'انتخاب',
                'title'  => 'فیلترها',

                'dropdown' => [
                    'searchable' => [
                        'at-least-two-chars' => 'حداقل ۲ حرف تایپ کنید...',
                        'no-results'         => 'هیچ نتیجه‌ای یافت نشد...',
                    ],
                ],

                'custom-filters' => [
                    'clear-all' => 'پاک کردن همه',
                    'title'     => 'فیلترهای سفارشی',
                ],

                'boolean-options' => [
                    'false' => 'نادرست',
                    'true'  => 'درست',
                ],

                'date-options' => [
                    'last-month'        => 'ماه گذشته',
                    'last-six-months'   => '۶ ماه گذشته',
                    'last-three-months' => '۳ ماه گذشته',
                    'this-month'        => 'این ماه',
                    'this-week'         => 'این هفته',
                    'this-year'         => 'امسال',
                    'today'             => 'امروز',
                    'yesterday'         => 'دیروز',
                ],
            ],

            'table' => [
                'actions'              => 'اقدامات',
                'no-records-available' => 'رکوردی موجود نیست.',
            ],
        ],

        'modal' => [
            'confirm' => [
                'agree-btn'    => 'موافقم',
                'disagree-btn' => 'مخالفم',
                'message'      => 'آیا مطمئن هستید که می‌خواهید این عمل را انجام دهید؟',
                'title'        => 'آیا مطمئن هستید؟',
            ],
        ],

        'tags' => [
            'index' => [
                'title'          => 'برچسب‌ها',
                'added-tags'     => 'برچسب‌های اضافه شده',
                'save-btn'       => 'ذخیره برچسب',
                'placeholder'    => 'برای جستجوی برچسب‌ها تایپ کنید',
                'add-tag'        => 'اضافه کردن ":term"...',
                'aquarelle-red'  => 'قرمز آبرنگی',
                'crushed-cashew' => 'بادام هندی خرد شده',
                'beeswax'        => 'موم عسل',
                'lemon-chiffon'  => 'لیمویی',
                'snow-flurry'    => 'برف سبک',
                'honeydew'       => 'شهد عسل',
            ],
        ],

        'layouts' => [
            'header' => [
                'mega-search' => [
                    'title'   => 'جستجو',

                    'tabs' => [
                        'leads'    => 'سرنخ‌ها',
                        'quotes'   => 'پیشنهادات',
                        'persons'  => 'افراد',
                        'products' => 'محصولات',
                    ],

                    'explore-all-products'          => 'کاوش در تمامی محصولات',
                    'explore-all-leads'             => 'کاوش در تمامی سرنخ‌ها',
                    'explore-all-contacts'          => 'کاوش در تمامی مخاطبین',
                    'explore-all-quotes'            => 'کاوش در تمامی پیشنهادات',
                    'explore-all-matching-products' => 'کاوش در تمامی محصولات مطابق ":query" (:count)',
                    'explore-all-matching-leads'    => 'کاوش در تمامی سرنخ‌های مطابق ":query" (:count)',
                    'explore-all-matching-contacts' => 'کاوش در تمامی مخاطبین مطابق ":query" (:count)',
                    'explore-all-matching-quotes'   => 'کاوش در تمامی پیشنهادات مطابق ":query" (:count)',
                ],
            ],
        ],

        'attributes' => [
            'edit'   => [
                'delete' => 'حذف',
            ],

            'lookup' => [
                'click-to-add'    => 'برای اضافه کردن کلیک کنید',
                'search'          => 'جستجو',
                'no-result-found' => 'نتیجه‌ای یافت نشد',
                'search'          => 'جستجو...',
            ],
        ],

        'lookup' => [
            'click-to-add' => 'برای اضافه کردن کلیک کنید',
            'no-results'   => 'نتیجه‌ای یافت نشد',
            'add-as-new'   => 'اضافه کردن به عنوان جدید',
            'search'       => 'جستجو...',
        ],

        'flash-group' => [
            'success' => 'موفقیت',
            'error'   => 'خطا',
            'warning' => 'هشدار',
            'info'    => 'اطلاعات',
        ],
    ],

    'quotes' => [
        'index' => [
            'title'          => 'نقل‌قول‌ها',
            'create-btn'     => 'ایجاد نقل‌قول',
            'create-success' => 'نقل‌قول با موفقیت ایجاد شد.',
            'update-success' => 'نقل‌قول با موفقیت به‌روزرسانی شد.',
            'delete-success' => 'نقل‌قول با موفقیت حذف شد.',
            'delete-failed'  => 'حذف نقل‌قول ممکن نیست.',

            'datagrid' => [
                'subject'        => 'موضوع',
                'sales-person'   => 'فروشنده',
                'expired-at'     => 'تاریخ انقضا',
                'created-at'     => 'تاریخ ایجاد',
                'expired-quotes' => 'نقل‌قول‌های منقضی‌شده',
                'person'         => 'شخص',
                'subtotal'       => 'جمع جزء',
                'discount'       => 'تخفیف',
                'tax'            => 'مالیات',
                'adjustment'     => 'تنظیم',
                'grand-total'    => 'جمع کل',
                'edit'           => 'ویرایش',
                'delete'         => 'حذف',
                'print'          => 'چاپ',
            ],

            'pdf' => [
                'title'            => 'نقل‌قول',
                'grand-total'      => 'جمع کل',
                'adjustment'       => 'تنظیم',
                'discount'         => 'تخفیف',
                'tax'              => 'مالیات',
                'sub-total'        => 'جمع جزء',
                'amount'           => 'مقدار',
                'quantity'         => 'تعداد',
                'price'            => 'قیمت',
                'product-name'     => 'نام محصول',
                'sku'              => 'کد SKU',
                'shipping-address' => 'آدرس ارسال',
                'billing-address'  => 'آدرس صورتحساب',
                'expired-at'       => 'تاریخ انقضا',
                'sales-person'     => 'فروشنده',
                'date'             => 'تاریخ',
                'quote-id'         => 'شناسه نقل‌قول',
            ],
        ],

        'create' => [
            'title'             => 'ایجاد نقل‌قول',
            'save-btn'          => 'ذخیره نقل‌قول',
            'quote-info'        => 'اطلاعات نقل‌قول',
            'quote-info-info'   => 'اطلاعات پایه نقل‌قول را وارد کنید.',
            'address-info'      => 'اطلاعات آدرس',
            'address-info-info' => 'اطلاعات مربوط به آدرس مرتبط با نقل‌قول.',
            'quote-items'       => 'موارد نقل‌قول',
            'search-products'   => 'جستجوی محصولات',
            'link-to-lead'      => 'پیوند به سرنخ',
            'quote-item-info'   => 'درخواست محصول را برای این نقل‌قول اضافه کنید.',
            'quote-name'        => 'نام نقل‌قول',
            'quantity'          => 'تعداد',
            'price'             => 'قیمت',
            'discount'          => 'تخفیف',
            'tax'               => 'مالیات',
            'total'             => 'مجموع',
            'amount'            => 'مقدار',
            'add-item'          => '+ افزودن مورد',
            'sub-total'         => 'جمع جزء (:symbol)',
            'total-discount'    => 'تخفیف (:symbol)',
            'total-tax'         => 'مالیات (:symbol)',
            'total-adjustment'  => 'تنظیم (:symbol)',
            'grand-total'       => 'جمع کل (:symbol)',
            'discount-amount'   => 'مقدار تخفیف',
            'tax-amount'        => 'مقدار مالیات',
            'adjustment-amount' => 'مقدار تنظیم',
            'product-name'      => 'نام محصول',
            'action'            => 'عملیات',
        ],

        'edit' => [
            'title'             => 'ویرایش نقل‌قول',
            'save-btn'          => 'ذخیره نقل‌قول',
            'quote-info'        => 'اطلاعات نقل‌قول',
            'quote-info-info'   => 'اطلاعات پایه نقل‌قول را وارد کنید.',
            'address-info'      => 'اطلاعات آدرس',
            'address-info-info' => 'اطلاعات مربوط به آدرس مرتبط با نقل‌قول.',
            'quote-items'       => 'موارد نقل‌قول',
            'link-to-lead'      => 'پیوند به سرنخ',
            'quote-item-info'   => 'درخواست محصول را برای این نقل‌قول اضافه کنید.',
            'quote-name'        => 'نام نقل‌قول',
            'quantity'          => 'تعداد',
            'price'             => 'قیمت',
            'search-products'   => 'جستجوی محصولات',
            'discount'          => 'تخفیف',
            'tax'               => 'مالیات',
            'total'             => 'مجموع',
            'amount'            => 'مقدار',
            'add-item'          => '+ افزودن مورد',
            'sub-total'         => 'جمع جزء (:symbol)',
            'total-discount'    => 'تخفیف (:symbol)',
            'total-tax'         => 'مالیات (:symbol)',
            'total-adjustment'  => 'تنظیم (:symbol)',
            'grand-total'       => 'جمع کل (:symbol)',
            'discount-amount'   => 'مقدار تخفیف',
            'tax-amount'        => 'مقدار مالیات',
            'adjustment-amount' => 'مقدار تنظیم',
            'product-name'      => 'نام محصول',
            'action'            => 'عملیات',
        ],
    ],

    'contacts' => [
        'persons' => [
            'index' => [
                'title'          => 'اشخاص',
                'create-btn'     => 'ایجاد شخص',
                'create-success' => 'شخص با موفقیت ایجاد شد.',
                'update-success' => 'شخص با موفقیت به‌روزرسانی شد.',
                'delete-success' => 'شخص با موفقیت حذف شد.',
                'delete-failed'  => 'حذف شخص ممکن نیست.',

                'datagrid' => [
                    'contact-numbers'   => 'شماره‌های تماس',
                    'delete'            => 'حذف',
                    'edit'              => 'ویرایش',
                    'emails'            => 'ایمیل‌ها',
                    'id'                => 'شناسه',
                    'view'              => 'مشاهده',
                    'name'              => 'نام',
                    'organization-name' => 'نام سازمان',
                ],
            ],

            'view' => [
                'title'              => ':name',
                'about-person'       => 'درباره شخص',
                'about-organization' => 'درباره سازمان',

                'activities' => [
                    'index' => [
                        'all'          => 'همه',
                        'calls'        => 'تماس‌ها',
                        'meetings'     => 'جلسات',
                        'lunches'      => 'ناهارها',
                        'files'        => 'فایل‌ها',
                        'quotes'       => 'نقل‌قول‌ها',
                        'notes'        => 'یادداشت‌ها',
                        'emails'       => 'ایمیل‌ها',
                        'by-user'      => 'توسط :user',
                        'scheduled-on' => 'برنامه‌ریزی شده در',
                        'location'     => 'مکان',
                        'participants' => 'شرکت‌کنندگان',
                        'mark-as-done' => 'علامت‌گذاری به‌عنوان انجام شده',
                        'delete'       => 'حذف',
                        'edit'         => 'ویرایش',
                    ],

                    'actions' => [
                        'mail' => [
                            'btn'      => 'ایمیل',
                            'title'    => 'ایمیل جدید',
                            'to'       => 'به',
                            'cc'       => 'کپی (CC)',
                            'bcc'      => 'کپی مخفی (BCC)',
                            'subject'  => 'موضوع',
                            'send-btn' => 'ارسال',
                            'message'  => 'پیام',
                        ],

                        'file' => [
                            'btn'           => 'فایل',
                            'title'         => 'افزودن فایل',
                            'title-control' => 'عنوان',
                            'name'          => 'نام فایل',
                            'description'   => 'توضیحات',
                            'file'          => 'فایل',
                            'save-btn'      => 'ذخیره فایل',
                        ],

                        'note' => [
                            'btn'      => 'یادداشت',
                            'title'    => 'افزودن یادداشت',
                            'comment'  => 'نظر',
                            'save-btn' => 'ذخیره یادداشت',
                        ],

                        'activity' => [
                            'btn'           => 'فعالیت',
                            'title'         => 'افزودن فعالیت',
                            'title-control' => 'عنوان',
                            'description'   => 'توضیحات',
                            'schedule-from' => 'برنامه‌ریزی از',
                            'schedule-to'   => 'برنامه‌ریزی تا',
                            'location'      => 'مکان',
                            'call'          => 'تماس',
                            'meeting'       => 'جلسه',
                            'lunch'         => 'ناهار',
                            'save-btn'      => 'ذخیره فعالیت',
                        ],
                    ],
                ],
            ],

            'create' => [
                'title'    => 'ایجاد شخص',
                'save-btn' => 'ذخیره شخص',
            ],

            'edit' => [
                'title'    => 'ویرایش شخص',
                'save-btn' => 'ذخیره شخص',
            ],
        ],

        'organizations' => [
            'index' => [
                'title'          => 'سازمان‌ها',
                'create-btn'     => 'ایجاد سازمان',
                'create-success' => 'سازمان با موفقیت ایجاد شد.',
                'update-success' => 'سازمان با موفقیت به‌روزرسانی شد.',
                'delete-success' => 'سازمان با موفقیت حذف شد.',
                'delete-failed'  => 'سازمان قابل حذف نیست.',

                'datagrid' => [
                    'delete'        => 'حذف',
                    'edit'          => 'ویرایش',
                    'id'            => 'شناسه',
                    'name'          => 'نام',
                    'persons-count' => 'تعداد اشخاص',
                ],
            ],

            'create' => [
                'title'    => 'ایجاد سازمان',
                'save-btn' => 'ذخیره سازمان',
            ],

            'edit' => [
                'title'    => 'ویرایش سازمان',
                'save-btn' => 'ذخیره سازمان',
            ],
        ],
    ],

    'products' => [
        'index' => [
            'title'          => 'محصولات',
            'create-btn'     => 'ایجاد محصول',
            'create-success' => 'محصول با موفقیت ایجاد شد.',
            'update-success' => 'محصول با موفقیت به‌روزرسانی شد.',
            'delete-success' => 'محصول با موفقیت حذف شد.',
            'delete-failed'  => 'محصول قابل حذف نیست.',

            'datagrid'   => [
                'allocated' => 'اختصاص داده شده',
                'delete'    => 'حذف',
                'edit'      => 'ویرایش',
                'id'        => 'شناسه',
                'in-stock'  => 'در انبار',
                'name'      => 'نام',
                'on-hand'   => 'موجودی',
                'price'     => 'قیمت',
                'sku'       => 'SKU',
                'view'      => 'مشاهده',
            ],
        ],

        'create' => [
            'save-btn'  => 'ذخیره محصولات',
            'title'     => 'ایجاد محصولات',
            'general'   => 'عمومی',
            'price'     => 'قیمت',
        ],

        'edit' => [
            'title'     => 'ویرایش محصولات',
            'save-btn'  => 'ذخیره محصولات',
            'general'   => 'عمومی',
            'price'     => 'قیمت',
        ],

        'view' => [
            'sku'         => 'SKU',
            'all'         => 'همه',
            'notes'       => 'یادداشت‌ها',
            'files'       => 'فایل‌ها',
            'inventories' => 'موجودی',
            'change-logs' => 'تغییرات',

            'attributes' => [
                'about-product' => 'درباره محصول',
            ],

            'inventory' => [
                'source'     => 'منبع',
                'in-stock'   => 'در انبار',
                'allocated'  => 'اختصاص داده شده',
                'on-hand'    => 'موجودی',
                'actions'    => 'عملیات',
                'assign'     => 'اختصاص دادن',
                'add-source' => 'افزودن منبع',
                'location'   => 'مکان',
                'add-more'   => 'افزودن بیشتر',
                'save'       => 'ذخیره',
            ],
        ],
    ],

    'settings' => [
        'title' => 'تنظیمات',

        'groups' => [
            'index' => [
                'create-btn'        => 'ایجاد گروه',
                'title'             => 'گروه‌ها',
                'create-success'    => 'گروه با موفقیت ایجاد شد.',
                'update-success'    => 'گروه با موفقیت به‌روزرسانی شد.',
                'destroy-success'   => 'گروه با موفقیت حذف شد.',
                'delete-failed'     => 'گروه قابل حذف نیست.',

                'datagrid'   => [
                    'delete'      => 'حذف',
                    'description' => 'توضیحات',
                    'edit'        => 'ویرایش',
                    'id'          => 'شناسه',
                    'name'        => 'نام',
                ],

                'edit' => [
                    'title' => 'ویرایش گروه',
                ],

                'create' => [
                    'name'        => 'نام',
                    'title'       => 'ایجاد گروه',
                    'description' => 'توضیحات',
                    'save-btn'    => 'ذخیره گروه',
                ],
            ],
        ],

        'roles' => [
            'index' => [
                'being-used'                => 'نقش قابل حذف نیست، زیرا در کاربر مدیر استفاده می‌شود.',
                'create-btn'                => 'ایجاد نقش‌ها',
                'create-success'            => 'نقش با موفقیت ایجاد شد.',
                'current-role-delete-error' => 'نقش اختصاص داده شده به کاربر فعلی قابل حذف نیست.',
                'delete-failed'             => 'نقش قابل حذف نیست.',
                'delete-success'            => 'نقش با موفقیت حذف شد.',
                'last-delete-error'         => 'حداقل یک نقش لازم است.',
                'settings'                  => 'تنظیمات',
                'title'                     => 'نقش‌ها',
                'update-success'            => 'نقش با موفقیت به‌روزرسانی شد.',
                'user-define-error'         => 'نقش سیستمی قابل حذف نیست.',

                'datagrid'   => [
                    'all'             => 'همه',
                    'custom'          => 'سفارشی',
                    'delete'          => 'حذف',
                    'description'     => 'توضیحات',
                    'edit'            => 'ویرایش',
                    'id'              => 'شناسه',
                    'name'            => 'نام',
                    'permission-type' => 'نوع مجوز',
                ],
            ],

            'create' => [
                'access-control' => 'کنترل دسترسی',
                'all'            => 'همه',
                'back-btn'       => 'بازگشت',
                'custom'         => 'سفارشی',
                'description'    => 'توضیحات',
                'general'        => 'عمومی',
                'name'           => 'نام',
                'permissions'    => 'مجوزها',
                'save-btn'       => 'ذخیره نقش',
                'title'          => 'ایجاد نقش',
            ],

            'edit' => [
                'access-control' => 'کنترل دسترسی',
                'all'            => 'همه',
                'back-btn'       => 'بازگشت',
                'custom'         => 'سفارشی',
                'description'    => 'توضیحات',
                'general'        => 'عمومی',
                'name'           => 'نام',
                'permissions'    => 'مجوزها',
                'save-btn'       => 'ذخیره نقش',
                'title'          => 'ویرایش نقش',
            ],
        ],

        'types' => [
            'index' => [
                'create-btn'     => 'ایجاد نوع',
                'create-success' => 'نوع با موفقیت ایجاد شد.',
                'delete-failed'  => 'نوع قابل حذف نیست.',
                'delete-success' => 'نوع با موفقیت حذف شد.',
                'title'          => 'نوع‌ها',
                'update-success' => 'نوع با موفقیت به‌روزرسانی شد.',

                'datagrid' => [
                    'delete'      => 'حذف',
                    'description' => 'توضیحات',
                    'edit'        => 'ویرایش',
                    'id'          => 'شناسه',
                    'name'        => 'نام',
                ],

                'create' => [
                    'name'     => 'نام',
                    'save-btn' => 'ذخیره نوع',
                    'title'    => 'ایجاد نوع',
                ],

                'edit' => [
                    'title' => 'ویرایش نوع',
                ],
            ],
        ],

        'sources' => [
            'index' => [
                'create-btn'     => 'ایجاد منبع',
                'create-success' => 'منبع با موفقیت ایجاد شد.',
                'delete-failed'  => 'منبع قابل حذف نیست.',
                'delete-success' => 'منبع با موفقیت حذف شد.',
                'title'          => 'منابع',
                'update-success' => 'منبع با موفقیت به‌روزرسانی شد.',

                'datagrid' => [
                    'delete' => 'حذف',
                    'edit'   => 'ویرایش',
                    'id'     => 'شناسه',
                    'name'   => 'نام',
                ],

                'create' => [
                    'name'     => 'نام',
                    'save-btn' => 'ذخیره منبع',
                    'title'    => 'ایجاد منبع',
                ],

                'edit' => [
                    'title' => 'ویرایش منبع',
                ],
            ],
        ],

        'workflows' => [
            'index' => [
                'title'          => 'جریان‌های کاری',
                'create-btn'     => 'ایجاد جریان کاری',
                'create-success' => 'جریان کاری با موفقیت ایجاد شد.',
                'update-success' => 'جریان کاری با موفقیت به‌روزرسانی شد.',
                'delete-success' => 'جریان کاری با موفقیت حذف شد.',
                'delete-failed'  => 'جریان کاری قابل حذف نیست.',
                'datagrid'       => [
                    'delete'      => 'حذف',
                    'description' => 'توضیحات',
                    'edit'        => 'ویرایش',
                    'id'          => 'شناسه',
                    'name'        => 'نام',
                ],
            ],

            'helpers' => [
                'update-related-leads'       => 'به‌روزرسانی سرنخ‌های مرتبط',
                'send-email-to-sales-owner'  => 'ارسال ایمیل به صاحب فروش',
                'send-email-to-participants' => 'ارسال ایمیل به شرکت‌کنندگان',
                'add-webhook'                => 'افزودن وب‌هوک',
                'update-lead'                => 'به‌روزرسانی سرنخ',
                'update-person'              => 'به‌روزرسانی شخص',
                'send-email-to-person'       => 'ارسال ایمیل به شخص',
                'add-tag'                    => 'افزودن برچسب',
                'add-note-as-activity'       => 'افزودن یادداشت به‌عنوان فعالیت',
            ],

            'create' => [
                'title'                  => 'ایجاد جریان کاری',
                'event'                  => 'رویداد',
                'back-btn'               => 'بازگشت',
                'save-btn'               => 'ذخیره جریان کاری',
                'name'                   => 'نام',
                'basic-details'          => 'جزئیات پایه',
                'description'            => 'توضیحات',
                'actions'                => 'اقدامات',
                'basic-details-info'     => 'اطلاعات پایه جریان کاری را وارد کنید.',
                'event-info'             => 'یک رویداد triggers، چک‌ها، شرایط و اقدامات از پیش تعریف شده را انجام می‌دهد.',
                'conditions'             => 'شرایط',
                'conditions-info'        => 'شرایط قوانینی هستند که سناریوها را بررسی می‌کنند و در مواقع خاص فعال می‌شوند.',
                'actions-info'           => 'یک اقدام نه تنها بار کاری را کاهش می‌دهد بلکه فرآیند اتوماسیون CRM را بسیار آسان‌تر می‌کند.',
                'value'                  => 'مقدار',
                'condition-type'         => 'نوع شرط',
                'all-condition-are-true' => 'تمام شرایط صحیح هستند',
                'any-condition-are-true' => 'هر شرطی صحیح است',
                'add-condition'          => 'افزودن شرط',
                'add-action'             => 'افزودن اقدام',
                'yes'                    => 'بله',
                'no'                     => 'خیر',
                'email'                  => 'ایمیل',
                'is-equal-to'            => 'برابر است با',
                'is-not-equal-to'        => 'برابر نیست با',
                'equals-or-greater-than' => 'برابر یا بزرگ‌تر از',
                'equals-or-less-than'    => 'برابر یا کوچک‌تر از',
                'greater-than'           => 'بزرگ‌تر از',
                'less-than'              => 'کوچک‌تر از',
                'type'                   => 'نوع',
                'contain'                => 'شامل',
                'contains'               => 'شامل می‌شود',
                'does-not-contain'       => 'شامل نمی‌شود',
            ],

            'edit' => [
                'title'                  => 'ویرایش جریان کاری',
                'event'                  => 'رویداد',
                'back-btn'               => 'بازگشت',
                'save-btn'               => 'ذخیره جریان کاری',
                'name'                   => 'نام',
                'basic-details'          => 'جزئیات پایه',
                'description'            => 'توضیحات',
                'actions'                => 'اقدامات',
                'type'                   => 'نوع',
                'basic-details-info'     => 'اطلاعات پایه جریان کاری را وارد کنید.',
                'event-info'             => 'یک رویداد triggers، چک‌ها، شرایط و اقدامات از پیش تعریف شده را انجام می‌دهد.',
                'conditions'             => 'شرایط',
                'conditions-info'        => 'شرایط قوانینی هستند که سناریوها را بررسی می‌کنند و در مواقع خاص فعال می‌شوند.',
                'actions-info'           => 'یک اقدام نه تنها بار کاری را کاهش می‌دهد بلکه فرآیند اتوماسیون CRM را بسیار آسان‌تر می‌کند.',
                'value'                  => 'مقدار',
                'condition-type'         => 'نوع شرط',
                'all-condition-are-true' => 'تمام شرایط صحیح هستند',
                'any-condition-are-true' => 'هر شرطی صحیح است',
                'add-condition'          => 'افزودن شرط',
                'add-action'             => 'افزودن اقدام',
                'yes'                    => 'بله',
                'no'                     => 'خیر',
                'email'                  => 'ایمیل',
                'is-equal-to'            => 'برابر است با',
                'is-not-equal-to'        => 'برابر نیست با',
                'equals-or-greater-than' => 'برابر یا بزرگ‌تر از',
                'equals-or-less-than'    => 'برابر یا کوچک‌تر از',
                'greater-than'           => 'بزرگ‌تر از',
                'less-than'              => 'کوچک‌تر از',
                'contain'                => 'شامل',
                'contains'               => 'شامل می‌شود',
                'does-not-contain'       => 'شامل نمی‌شود',
            ],
        ],

        'webforms' => [
            'index' => [
                'title'          => 'فرم‌های وب',
                'create-btn'     => 'ایجاد فرم وب',
                'create-success' => 'فرم وب با موفقیت ایجاد شد.',
                'update-success' => 'فرم وب با موفقیت به‌روزرسانی شد.',
                'delete-success' => 'فرم وب با موفقیت حذف شد.',
                'delete-failed'  => 'فرم وب قابل حذف نیست.',

                'datagrid'       => [
                    'id'     => 'شناسه',
                    'title'  => 'عنوان',
                    'edit'   => 'ویرایش',
                    'delete' => 'حذف',
                ],
            ],

            'create' => [
                'title'                    => 'ایجاد فرم وب',
                'add-attribute-btn'        => 'افزودن دکمه ویژگی',
                'attribute-label-color'    => 'رنگ برچسب ویژگی',
                'attributes'               => 'ویژگی‌ها',
                'attributes-info'          => 'ویژگی‌های سفارشی را به فرم اضافه کنید.',
                'background-color'         => 'رنگ پس‌زمینه',
                'create-lead'              => 'ایجاد سرب',
                'customize-webform'        => 'سفارشی‌سازی فرم وب',
                'customize-webform-info'   => 'فرم وب خود را با رنگ‌های انتخابی سفارشی‌سازی کنید.',
                'description'              => 'توضیحات',
                'display-custom-message'   => 'نمایش پیام سفارشی',
                'form-background-color'    => 'رنگ پس‌زمینه فرم',
                'form-submit-btn-color'    => 'رنگ دکمه ارسال فرم',
                'form-submit-button-color' => 'رنگ دکمه ارسال فرم',
                'form-title-color'         => 'رنگ عنوان فرم',
                'general'                  => 'عمومی',
                'leads'                    => 'سرنخ‌ها',
                'person'                   => 'شخص',
                'save-btn'                 => 'ذخیره فرم وب',
                'submit-button-label'      => 'برچسب دکمه ارسال',
                'submit-success-action'    => 'عملکرد موفقیت آمیز ارسال',
                'redirect-to-url'          => 'انتقال به آدرس',
                'choose-value'             => 'انتخاب مقدار',
                'select-file'              => 'انتخاب فایل',
                'select-image'             => 'انتخاب تصویر',
                'enter-value'              => 'مقدار را وارد کنید',
            ],

            'edit' => [
                'title'                     => 'ویرایش فرم وب',
                'add-attribute-btn'         => 'افزودن دکمه ویژگی',
                'attribute-label-color'     => 'رنگ برچسب ویژگی',
                'attributes'                => 'ویژگی‌ها',
                'attributes-info'           => 'ویژگی‌های سفارشی را به فرم اضافه کنید.',
                'background-color'          => 'رنگ پس‌زمینه',
                'code-snippet'              => 'کد نمونه',
                'copied'                    => 'کپی شد',
                'copy'                      => 'کپی',
                'create-lead'               => 'ایجاد سرب',
                'customize-webform'         => 'سفارشی‌سازی فرم وب',
                'customize-webform-info'    => 'فرم وب خود را با رنگ‌های انتخابی سفارشی‌سازی کنید.',
                'description'               => 'توضیحات',
                'display-custom-message'    => 'نمایش پیام سفارشی',
                'embed'                     => 'گنجاندن',
                'form-background-color'     => 'رنگ پس‌زمینه فرم',
                'form-submit-btn-color'     => 'رنگ دکمه ارسال فرم',
                'form-submit-button-color'  => 'رنگ دکمه ارسال فرم',
                'form-title-color'          => 'رنگ عنوان فرم',
                'general'                   => 'عمومی',
                'preview'                   => 'پیش‌نمایش',
                'person'                    => 'شخص',
                'public-url'                => 'آدرس عمومی',
                'save-btn'                  => 'ذخیره فرم وب',
                'submit-button-label'       => 'برچسب دکمه ارسال',
                'submit-success-action'     => 'عملکرد موفقیت آمیز ارسال',
                'redirect-to-url'           => 'انتقال به آدرس',
                'choose-value'              => 'انتخاب مقدار',
                'select-file'               => 'انتخاب فایل',
                'select-image'              => 'انتخاب تصویر',
                'enter-value'               => 'مقدار را وارد کنید',
            ],
        ],

        'email-template' => [
            'index' => [
                'create-btn'     => 'ایجاد قالب ایمیل',
                'title'          => 'قالب‌های ایمیل',
                'create-success' => 'قالب ایمیل با موفقیت ایجاد شد.',
                'update-success' => 'قالب ایمیل با موفقیت به‌روزرسانی شد.',
                'delete-success' => 'قالب ایمیل با موفقیت حذف شد.',
                'delete-failed'  => 'قالب ایمیل قابل حذف نیست.',

                'datagrid'   => [
                    'delete'       => 'حذف',
                    'edit'         => 'ویرایش',
                    'id'           => 'شناسه',
                    'name'         => 'نام',
                    'subject'      => 'موضوع',
                ],
            ],

            'create' => [
                'title'                => 'ایجاد قالب ایمیل',
                'save-btn'             => 'ذخیره قالب ایمیل',
                'email-template'       => 'قالب ایمیل',
                'subject'              => 'موضوع',
                'content'              => 'محتوا',
                'subject-placeholders' => 'متغیرهای موضوع',
                'general'              => 'عمومی',
                'name'                 => 'نام',
            ],

            'edit' => [
                'title'                => 'ویرایش قالب ایمیل',
                'save-btn'             => 'ذخیره قالب ایمیل',
                'email-template'       => 'قالب ایمیل',
                'subject'              => 'موضوع',
                'content'              => 'محتوا',
                'subject-placeholders' => 'متغیرهای موضوع',
                'general'              => 'عمومی',
                'name'                 => 'نام',
            ],
        ],

        'marketing' => [
            'events' => [
                'index' => [
                    'create-btn'          => 'ایجاد رویداد',
                    'title'               => 'رویدادها',
                    'create-success'      => 'رویداد با موفقیت ایجاد شد.',
                    'update-success'      => 'رویداد با موفقیت به‌روزرسانی شد.',
                    'delete-success'      => 'رویداد با موفقیت حذف شد.',
                    'delete-failed'       => 'رویداد قابل حذف نیست.',
                    'mass-delete-success' => 'رویدادها با موفقیت حذف شدند',

                    'datagrid'   => [
                        'delete'       => 'حذف',
                        'edit'         => 'ویرایش',
                        'id'           => 'شناسه',
                        'name'         => 'نام',
                        'description'  => 'توضیحات',
                        'date'         => 'تاریخ',
                    ],

                    'create'     => [
                        'title'       => 'ایجاد رویداد',
                        'name'        => 'نام',
                        'date'        => 'تاریخ',
                        'description' => 'توضیحات',
                    ],

                    'edit' => [
                        'title' => 'ویرایش رویداد',
                    ],
                ],
            ],

            'campaigns' => [
                'index' => [
                    'create-btn'          => 'ایجاد کمپین',
                    'title'               => 'کمپین‌ها',
                    'create-success'      => 'کمپین با موفقیت ایجاد شد.',
                    'update-success'      => 'کمپین با موفقیت به‌روزرسانی شد.',
                    'delete-success'      => 'کمپین با موفقیت حذف شد.',
                    'delete-failed'       => 'کمپین قابل حذف نیست.',
                    'mass-delete-success' => 'کمپین‌ها با موفقیت حذف شدند',

                    'datagrid'   => [
                        'id'       => 'شناسه',
                        'name'     => 'نام',
                        'subject'  => 'موضوع',
                        'status'   => 'وضعیت',
                        'active'   => 'فعال',
                        'inactive' => 'غیرفعال',
                        'edit'     => 'ویرایش',
                        'delete'   => 'حذف',
                    ],

                    'create'     => [
                        'title'          => 'ایجاد کمپین',
                        'name'           => 'نام',
                        'type'           => 'نوع',
                        'subject'        => 'موضوع',
                        'event'          => 'رویداد',
                        'email-template' => 'قالب ایمیل',
                        'status'         => 'وضعیت',
                    ],

                    'edit' => [
                        'title' => 'ویرایش کمپین',
                    ],
                ],
            ],
        ],

        'tags' => [
            'index' => [
                'create-btn'     => 'ایجاد برچسب',
                'title'          => 'برچسب‌ها',
                'create-success' => 'برچسب با موفقیت ایجاد شد.',
                'update-success' => 'برچسب با موفقیت به‌روزرسانی شد.',
                'delete-success' => 'برچسب با موفقیت حذف شد.',
                'delete-failed'  => 'برچسب قابل حذف نیست.',

                'datagrid' => [
                    'delete'      => 'حذف',
                    'edit'        => 'ویرایش',
                    'id'          => 'شناسه',
                    'name'        => 'نام',
                    'users'       => 'کاربران',
                    'created-at'  => 'تاریخ ایجاد',
                ],

                'create' => [
                    'name'     => 'نام',
                    'save-btn' => 'ذخیره برچسب',
                    'title'    => 'ایجاد برچسب',
                    'color'    => 'رنگ',
                ],

                'edit' => [
                    'title' => 'ویرایش برچسب',
                ],
            ],
        ],

        'users' => [
            'index' => [
                'create-btn'          => 'ایجاد کاربر',
                'create-success'      => 'کاربر با موفقیت ایجاد شد.',
                'delete-failed'       => 'کاربر قابل حذف نیست.',
                'delete-success'      => 'کاربر با موفقیت حذف شد.',
                'last-delete-error'   => 'حداقل یک کاربر لازم است.',
                'mass-delete-failed'  => 'کاربران قابل حذف نیستند.',
                'mass-delete-success' => 'کاربران با موفقیت حذف شدند.',
                'mass-update-failed'  => 'کاربران قابل به‌روزرسانی نیستند.',
                'mass-update-success' => 'کاربران با موفقیت به‌روزرسانی شدند.',
                'title'               => 'کاربران',
                'update-success'      => 'کاربر با موفقیت به‌روزرسانی شد.',
                'user-define-error'   => 'قابل حذف نیست.',
                'active'              => 'فعال',
                'inactive'            => 'غیرفعال',

                'datagrid' => [
                    'active'        => 'فعال',
                    'created-at'    => 'تاریخ ایجاد',
                    'delete'        => 'حذف',
                    'edit'          => 'ویرایش',
                    'email'         => 'ایمیل',
                    'id'            => 'شناسه',
                    'inactive'      => 'غیرفعال',
                    'name'          => 'نام',
                    'status'        => 'وضعیت',
                    'update-status' => 'به‌روزرسانی وضعیت',
                    'users'         => 'کاربران',
                ],

                'create' => [
                    'confirm-password' => 'تأیید رمز عبور',
                    'email'            => 'ایمیل',
                    'general'          => 'عمومی',
                    'global'           => 'سراسری',
                    'group'            => 'گروه',
                    'individual'       => 'فردی',
                    'name'             => 'نام',
                    'password'         => 'رمز عبور',
                    'permission'       => 'مجوز',
                    'role'             => 'نقش',
                    'save-btn'         => 'ذخیره کاربر',
                    'status'           => 'وضعیت',
                    'title'            => 'ایجاد کاربر',
                    'view-permission'  => 'مجوز مشاهده',
                ],

                'edit' => [
                    'title' => 'ویرایش کاربر',
                ],
            ],
        ],

        'pipelines' => [
            'index' => [
                'title'                => 'پایپ‌لاین‌ها',
                'create-btn'           => 'ایجاد پایپ‌لاین',
                'create-success'       => 'پایپ‌لاین با موفقیت ایجاد شد.',
                'update-success'       => 'پایپ‌لاین با موفقیت به‌روزرسانی شد.',
                'delete-success'       => 'پایپ‌لاین با موفقیت حذف شد.',
                'delete-failed'        => 'پایپ‌لاین قابل حذف نیست.',
                'default-delete-error' => 'پایپ‌لاین پیش‌فرض قابل حذف نیست.',

                'datagrid' => [
                    'delete'      => 'حذف',
                    'edit'        => 'ویرایش',
                    'id'          => 'شناسه',
                    'is-default'  => 'پیش‌فرض',
                    'name'        => 'نام',
                    'no'          => 'خیر',
                    'rotten-days' => 'روزهای فاسد',
                    'yes'         => 'بله',
                ],
            ],

            'create' => [
                'title'                => 'ایجاد پایپ‌لاین',
                'save-btn'             => 'ذخیره پایپ‌لاین',
                'name'                 => 'نام',
                'rotten-days'          => 'روزهای فاسد',
                'mark-as-default'      => 'علامت‌گذاری به‌عنوان پیش‌فرض',
                'general'              => 'عمومی',
                'probability'          => 'احتمال(%)',
                'new-stage'            => 'جدید',
                'won-stage'            => 'برنده',
                'lost-stage'           => 'بازنده',
                'stage-btn'            => 'افزودن مرحله',
                'stages'               => 'مراحل',
                'duplicate-name'       => 'فیلد "نام" نمی‌تواند تکراری باشد',
                'delete-stage'         => 'حذف مرحله',
                'add-new-stages'       => 'افزودن مراحل جدید',
                'add-stage-info'       => 'مرحله جدیدی برای پایپ‌لاین خود اضافه کنید',
                'newly-added'          => 'تازه اضافه شده',
                'stage-delete-success' => 'مرحله با موفقیت حذف شد',
            ],

            'edit'  => [
                'title'                => 'ویرایش پایپ‌لاین',
                'save-btn'             => 'ذخیره پایپ‌لاین',
                'name'                 => 'نام',
                'rotten-days'          => 'روزهای فاسد',
                'mark-as-default'      => 'علامت‌گذاری به‌عنوان پیش‌فرض',
                'general'              => 'عمومی',
                'probability'          => 'احتمال(%)',
                'new-stage'            => 'جدید',
                'won-stage'            => 'برنده',
                'lost-stage'           => 'بازنده',
                'stage-btn'            => 'افزودن مرحله',
                'stages'               => 'مراحل',
                'duplicate-name'       => 'فیلد "نام" نمی‌تواند تکراری باشد',
                'delete-stage'         => 'حذف مرحله',
                'add-new-stages'       => 'افزودن مراحل جدید',
                'add-stage-info'       => 'مرحله جدیدی برای پایپ‌لاین خود اضافه کنید',
                'stage-delete-success' => 'مرحله با موفقیت حذف شد',
            ],
        ],

        'webhooks' => [
            'index' => [
                'title'          => 'وب‌هوک‌ها',
                'create-btn'     => 'ایجاد وب‌هوک',
                'create-success' => 'وب‌هوک با موفقیت ایجاد شد.',
                'update-success' => 'وب‌هوک با موفقیت به‌روزرسانی شد.',
                'delete-success' => 'وب‌هوک با موفقیت حذف شد.',
                'delete-failed'  => 'وب‌هوک قابل حذف نیست.',

                'datagrid' => [
                    'id'          => 'شناسه',
                    'delete'      => 'حذف',
                    'edit'        => 'ویرایش',
                    'name'        => 'نام',
                    'entity-type' => 'نوع موجودیت',
                    'end-point'   => 'پایان نقطه',
                ],
            ],

            'create' => [
                'title'                 => 'ایجاد وب‌هوک',
                'save-btn'              => 'ذخیره وب‌هوک',
                'info'                  => 'جزئیات وب‌هوک‌ها را وارد کنید',
                'url-and-parameters'    => 'آدرس و پارامترها',
                'method'                => 'متد',
                'post'                  => 'پست',
                'put'                   => 'پوت',
                'url-endpoint'          => 'آدرس پایان',
                'parameters'            => 'پارامترها',
                'add-new-parameter'     => 'افزودن پارامتر جدید',
                'url-preview'           => 'پیش‌نمایش آدرس:',
                'headers'               => 'هدینگ‌ها',
                'add-new-header'        => 'افزودن هدینگ جدید',
                'body'                  => 'بدن',
                'default'               => 'پیش‌فرض',
                'x-www-form-urlencoded' => 'x-www-form-urlencoded',
                'key-and-value'         => 'کلید و مقدار',
                'add-new-payload'       => 'اضافه کردن بار جدید',
                'raw'                   => 'خام',
                'general'               => 'عمومی',
                'name'                  => 'نام',
                'entity-type'           => 'نوع موجودیت',
                'insert-placeholder'    => 'درج نشانه‌گذاری',
                'description'           => 'توضیحات',
                'json'                  => 'جی‌سان',
                'text'                  => 'متن',
            ],

            'edit' => [
                'title'                 => 'ویرایش وب‌هوک',
                'edit-btn'              => 'ذخیره وب‌هوک',
                'save-btn'              => 'ذخیره وب‌هوک',
                'info'                  => 'جزئیات وب‌هوک‌ها را وارد کنید',
                'url-and-parameters'    => 'آدرس و پارامترها',
                'method'                => 'متد',
                'post'                  => 'پست',
                'put'                   => 'پوت',
                'url-endpoint'          => 'آدرس پایان',
                'parameters'            => 'پارامترها',
                'add-new-parameter'     => 'افزودن پارامتر جدید',
                'url-preview'           => 'پیش‌نمایش آدرس:',
                'headers'               => 'هدینگ‌ها',
                'add-new-header'        => 'افزودن هدینگ جدید',
                'body'                  => 'بدن',
                'default'               => 'پیش‌فرض',
                'x-www-form-urlencoded' => 'x-www-form-urlencoded',
                'key-and-value'         => 'کلید و مقدار',
                'add-new-payload'       => 'اضافه کردن بار جدید',
                'raw'                   => 'خام',
                'general'               => 'عمومی',
                'name'                  => 'نام',
                'entity-type'           => 'نوع موجودیت',
                'insert-placeholder'    => 'درج نشانه‌گذاری',
                'description'           => 'توضیحات',
                'json'                  => 'جی‌سان',
                'text'                  => 'متن',
            ],
        ],

        'warehouses' => [
            'index' => [
                'title'          => 'انبارها',
                'create-btn'     => 'ایجاد انبار',
                'create-success' => 'انبار با موفقیت ایجاد شد.',
                'name-exists'    => 'نام انبار قبلاً موجود است.',
                'update-success' => 'انبار با موفقیت به‌روزرسانی شد.',
                'delete-success' => 'انبار با موفقیت حذف شد.',
                'delete-failed'  => 'انبار قابل حذف نیست.',

                'datagrid' => [
                    'id'              => 'شناسه',
                    'name'            => 'نام',
                    'contact-name'    => 'نام تماس',
                    'delete'          => 'حذف',
                    'edit'            => 'ویرایش',
                    'view'            => 'مشاهده',
                    'created-at'      => 'تاریخ ایجاد',
                    'products'        => 'محصولات',
                    'contact-emails'  => 'ایمیل‌های تماس',
                    'contact-numbers' => 'شماره‌های تماس',
                ],
            ],

            'create' => [
                'title'         => 'ایجاد انبار',
                'save-btn'      => 'ذخیره انبار',
                'contact-info'  => 'اطلاعات تماس',
            ],

            'edit' => [
                'title'         => 'ویرایش انبار',
                'save-btn'      => 'ذخیره انبار',
                'contact-info'  => 'اطلاعات تماس',
            ],

            'view' => [
                'all'         => 'همه',
                'notes'       => 'یادداشت‌ها',
                'files'       => 'فایل‌ها',
                'location'    => 'مکان',
                'change-logs' => 'لاگ‌های تغییرات',

                'locations' => [
                    'action'         => 'عملیات',
                    'add-location'   => 'افزودن مکان',
                    'create-success' => 'مکان با موفقیت ایجاد شد.',
                    'delete'         => 'حذف',
                    'delete-failed'  => 'مکان قابل حذف نیست.',
                    'delete-success' => 'مکان با موفقیت حذف شد.',
                    'name'           => 'نام',
                    'save-btn'       => 'ذخیره',
                ],

                'general-information' => [
                    'title' => 'اطلاعات عمومی',
                ],

                'contact-information' => [
                    'title' => 'اطلاعات تماس',
                ],
            ],
        ],

        'attributes' => [
            'index' => [
                'title'              => 'ویژگی‌ها',
                'create-btn'         => 'ایجاد ویژگی',
                'create-success'     => 'ویژگی‌ها با موفقیت ایجاد شد.',
                'update-success'     => 'ویژگی‌ها با موفقیت به‌روزرسانی شد.',
                'delete-success'     => 'ویژگی‌ها با موفقیت حذف شد.',
                'delete-failed'      => 'ویژگی‌ها قابل حذف نیستند.',
                'user-define-error'  => 'قادر به حذف ویژگی سیستم نیست.',
                'mass-delete-failed' => 'ویژگی‌های سیستمی قابل حذف نیستند.',

                'datagrid' => [
                    'yes'         => 'بله',
                    'no'          => 'خیر',
                    'id'          => 'شناسه',
                    'code'        => 'کد',
                    'name'        => 'نام',
                    'entity-type' => 'نوع موجودیت',
                    'type'        => 'نوع',
                    'is-default'  => 'پیش‌فرض است',
                    'edit'        => 'ویرایش',
                    'delete'      => 'حذف',
                ],
            ],

            'create'  => [
                'title'                 => 'ایجاد ویژگی',
                'save-btn'              => 'ذخیره ویژگی',
                'code'                  => 'کد',
                'name'                  => 'نام',
                'entity-type'           => 'نوع موجودیت',
                'type'                  => 'نوع',
                'validations'           => 'اعتبارسنجی‌ها',
                'is-required'           => 'الزامی است',
                'input-validation'      => 'اعتبارسنجی ورودی',
                'is-unique'             => 'منحصربه‌فرد است',
                'labels'                => 'برچسب‌ها',
                'general'               => 'عمومی',
                'numeric'               => 'عددی',
                'decimal'               => 'اعشاری',
                'url'                   => 'آدرس',
                'options'               => 'گزینه‌ها',
                'option-type'           => 'نوع گزینه',
                'lookup-type'           => 'نوع جستجو',
                'add-option'            => 'افزودن گزینه',
                'save-option'           => 'ذخیره گزینه',
                'option-name'           => 'نام گزینه',
                'add-attribute-options' => 'افزودن گزینه‌های ویژگی',
                'text'                  => 'متن',
                'textarea'              => 'میدان متن',
                'price'                 => 'قیمت',
                'boolean'               => 'بولی',
                'select'                => 'انتخاب',
                'multiselect'           => 'چند انتخابی',
                'email'                 => 'ایمیل',
                'address'               => 'آدرس',
                'phone'                 => 'تلفن',
                'datetime'              => 'تاریخ و زمان',
                'date'                  => 'تاریخ',
                'image'                 => 'تصویر',
                'file'                  => 'فایل',
                'lookup'                => 'جستجو',
                'entity_type'           => 'نوع موجودیت',
                'checkbox'              => 'چک باکس',
                'is_required'           => 'الزامی است',
                'is_unique'             => 'منحصربه‌فرد است',
                'actions'               => 'عملیات',
            ],

            'edit'  => [
                'title'                 => 'ویرایش ویژگی',
                'save-btn'              => 'ذخیره ویژگی',
                'code'                  => 'کد',
                'name'                  => 'نام',
                'labels'                => 'برچسب‌ها',
                'entity-type'           => 'نوع موجودیت',
                'type'                  => 'نوع',
                'validations'           => 'اعتبارسنجی‌ها',
                'is-required'           => 'الزامی است',
                'input-validation'      => 'اعتبارسنجی ورودی',
                'is-unique'             => 'منحصربه‌فرد است',
                'general'               => 'عمومی',
                'numeric'               => 'عددی',
                'decimal'               => 'اعشاری',
                'url'                   => 'آدرس',
                'options'               => 'گزینه‌ها',
                'option-type'           => 'نوع گزینه',
                'lookup-type'           => 'نوع جستجو',
                'add-option'            => 'افزودن گزینه',
                'save-option'           => 'ذخیره گزینه',
                'option-name'           => 'نام گزینه',
                'add-attribute-options' => 'افزودن گزینه‌های ویژگی',
                'text'                  => 'متن',
                'textarea'              => 'میدان متن',
                'price'                 => 'قیمت',
                'boolean'               => 'بولی',
                'select'                => 'انتخاب',
                'multiselect'           => 'چند انتخابی',
                'email'                 => 'ایمیل',
                'address'               => 'آدرس',
                'phone'                 => 'تلفن',
                'datetime'              => 'تاریخ و زمان',
                'date'                  => 'تاریخ',
                'image'                 => 'تصویر',
                'file'                  => 'فایل',
                'lookup'                => 'جستجو',
                'entity_type'           => 'نوع موجودیت',
                'checkbox'              => 'چک باکس',
                'is_required'           => 'الزامی است',
                'is_unique'             => 'منحصربه‌فرد است',
                'actions'               => 'عملیات',
            ],
        ],
    ],

    'activities' => [
        'index' => [
            'title'      => 'فعالیت‌ها',

            'datagrid' => [
                'comment'       => 'نظر',
                'created_at'    => 'تاریخ ایجاد',
                'created_by'    => 'ایجاد شده توسط',
                'edit'          => 'ویرایش',
                'id'            => 'شناسه',
                'done'          => 'انجام شده',
                'not-done'      => 'انجام نشده',
                'lead'          => 'سرنخ',
                'mass-delete'   => 'حذف انبوه',
                'mass-update'   => 'به‌روزرسانی انبوه',
                'schedule-from' => 'برنامه‌ریزی از',
                'schedule-to'   => 'برنامه‌ریزی تا',
                'schedule_from' => 'برنامه‌ریزی از',
                'schedule_to'   => 'برنامه‌ریزی تا',
                'title'         => 'عنوان',
                'is_done'       => 'انجام شده',
                'type'          => 'نوع',
                'update'        => 'به‌روزرسانی',
                'call'          => 'تماس',
                'meeting'       => 'جلسه',
                'lunch'         => 'ناهار',
            ],
        ],

        'edit' => [
            'title'           => 'ویرایش فعالیت',
            'back-btn'        => 'برگشت',
            'save-btn'        => 'ذخیره فعالیت',
            'type'            => 'نوع فعالیت',
            'call'            => 'تماس',
            'meeting'         => 'جلسه',
            'lunch'           => 'ناهار',
            'schedule_to'     => 'برنامه‌ریزی تا',
            'schedule_from'   => 'برنامه‌ریزی از',
            'location'        => 'مکان',
            'comment'         => 'نظر',
            'lead'            => 'سرنخ',
            'participants'    => 'شرکت‌کنندگان',
            'general'         => 'عمومی',
            'persons'         => 'افراد',
            'no-result-found' => 'سوابقی یافت نشد.',
            'users'           => 'کاربران',
        ],

        'updated'              => 'به‌روزرسانی شد :attribute',
        'created'              => 'ایجاد شد',
        'duration-overlapping' => 'شرکت‌کنندگان در این زمان جلسه دیگری دارند. آیا می‌خواهید ادامه دهید؟',
        'create-success'       => 'فعالیت با موفقیت ایجاد شد.',
        'update-success'       => 'فعالیت با موفقیت به‌روزرسانی شد.',
        'overlapping-error'    => 'شرکت‌کنندگان در این زمان جلسه دیگری دارند.',
        'destroy-success'      => 'فعالیت با موفقیت حذف شد.',
        'delete-failed'        => 'امکان حذف فعالیت وجود ندارد.',
        'mass-update-success'  => 'فعالیت‌ها با موفقیت به‌روزرسانی شدند.',
        'mass-destroy-success' => 'فعالیت‌ها با موفقیت حذف شدند.',
        'mass-delete-failed'   => 'امکان حذف فعالیت‌ها وجود ندارد.',
    ],

    'mail' => [
        'index' => [
            'compose'           => 'نوشتن',
            'draft'             => 'پیش‌نویس',
            'inbox'             => 'صندوق ورودی',
            'outbox'            => 'صندوق خروجی',
            'sent'              => 'ارسال شده',
            'trash'             => 'سطل زباله',
            'compose-mail-btn'  => 'نوشتن ایمیل',
            'btn'               => 'ایمیل',
            'mail'              => [
                'title'         => 'نوشتن ایمیل',
                'to'            => 'به',
                'enter-emails'  => 'برای اضافه کردن ایمیل‌ها، کلید Enter را فشار دهید',
                'cc'            => 'CC',
                'bcc'           => 'BCC',
                'subject'       => 'موضوع',
                'send-btn'      => 'ارسال',
                'message'       => 'پیام',
                'draft'         => 'پیش‌نویس',
            ],

            'datagrid' => [
                'id'            => 'شناسه',
                'from'          => 'از',
                'to'            => 'به',
                'subject'       => 'موضوع',
                'tag-name'      => 'نام برچسب',
                'created-at'    => 'تاریخ ایجاد',
                'move-to-inbox' => 'انتقال به صندوق ورودی',
                'edit'          => 'ویرایش',
                'view'          => 'مشاهده',
                'delete'        => 'حذف',
            ],
        ],

        'create-success'      => 'ایمیل با موفقیت ارسال شد.',
        'update-success'      => 'ایمیل با موفقیت به‌روزرسانی شد.',
        'mass-update-success' => 'ایمیل‌ها با موفقیت به‌روزرسانی شدند.',
        'delete-success'      => 'ایمیل با موفقیت حذف شد.',
        'delete-failed'       => 'ایمیل قابل حذف نیست.',

        'view' => [
            'title'                      => 'ایمیل‌ها',
            'subject'                    => ':subject',
            'link-mail'                  => 'لینک ایمیل',
            'to'                         => 'به',
            'cc'                         => 'CC',
            'bcc'                        => 'BCC',
            'reply'                      => 'پاسخ',
            'reply-all'                  => 'پاسخ به همه',
            'forward'                    => 'فوروارد',
            'delete'                     => 'حذف',
            'enter-mails'                => 'شناسه ایمیل را وارد کنید',
            'rotten-days'                => 'سرنخ به مدت :days روز خراب شده است',
            'search-an-existing-lead'    => 'جستجوی سرنخ موجود',
            'search-an-existing-contact' => 'جستجوی مخاطب موجود',
            'message'                    => 'پیام',
            'add-attachments'            => 'اضافه کردن پیوست‌ها',
            'discard'                    => 'لغو',
            'send'                       => 'ارسال',
            'no-result-found'            => 'نتیجه‌ای یافت نشد',
            'add-new-contact'            => 'افزودن مخاطب جدید',
            'description'                => 'توضیحات',
            'search'                     => 'جستجو...',
            'add-new-lead'               => 'افزودن سرنخ جدید',
            'create-new-contact'         => 'ایجاد مخاطب جدید',
            'save-contact'               => 'ذخیره مخاطب',
            'create-lead'                => 'ایجاد سرنخ',
            'linked-contact'             => 'مخاطب مرتبط',
            'link-to-contact'            => 'لینک به مخاطب',
            'link-to-lead'               => 'لینک به سرنخ',
            'linked-lead'                => 'سرنخ مرتبط',
            'lead-details'               => 'جزئیات سرنخ',
            'contact-person'             => 'شخص تماس',
            'product'                    => 'محصول',

            'tags' => [
                'create-success'  => 'برچسب با موفقیت ایجاد شد.',
                'destroy-success' => 'برچسب با موفقیت حذف شد.',
            ],
        ],
    ],

    'common' => [
        'custom-attributes' => [
            'select-country' => 'انتخاب کشور',
            'select-state'   => 'انتخاب ایالت',
            'state'          => 'ایالت',
            'city'           => 'شهر',
            'postcode'       => 'کد پستی',
            'work'           => 'محل کار',
            'home'           => 'خانه',
            'add-more'       => 'افزودن بیشتر',
            'select'         => 'انتخاب',
            'country'        => 'کشور',
            'address'        => 'آدرس',
        ],
    ],

    'leads' => [
        'create-success'    => 'سرنخ با موفقیت ایجاد شد.',
        'update-success'    => 'سرنخ با موفقیت به‌روزرسانی شد.',
        'destroy-success'   => 'سرنخ با موفقیت حذف شد.',
        'destroy-failed'    => 'سرنخ قابل حذف نیست.',

        'index' => [
            'title'      => 'سرنخ‌ها',
            'create-btn' => 'ایجاد سرنخ',

            'datagrid' => [
                'id'                  => 'شناسه',
                'sales-person'        => 'کارشناس فروش',
                'subject'             => 'موضوع',
                'source'              => 'منبع',
                'lead-value'          => 'ارزش سرنخ',
                'lead-type'           => 'نوع سرنخ',
                'tag-name'            => 'نام برچسب',
                'contact-person'      => 'شخص تماس',
                'stage'               => 'مرحله',
                'rotten-lead'         => 'سرنخ خراب شده',
                'expected-close-date' => 'تاریخ بسته شدن مورد انتظار',
                'created-at'          => 'تاریخ ایجاد',
                'no'                  => 'خیر',
                'yes'                 => 'بله',
                'delete'              => 'حذف',
                'mass-delete'         => 'حذف گروهی',
                'mass-update'         => 'به‌روزرسانی گروهی',
            ],

            'kanban' => [
                'rotten-days'            => 'سرنخ برای :days روز خراب شده است',
                'empty-list'             => 'لیست سرنخ‌های شما خالی است',
                'empty-list-description' => 'یک سرنخ ایجاد کنید تا اهداف خود را سازماندهی کنید.',
                'create-lead-btn'        => 'ایجاد سرنخ',

                'columns' => [
                    'contact-person'      => 'شخص تماس',
                    'id'                  => 'شناسه',
                    'lead-type'           => 'نوع سرنخ',
                    'lead-value'          => 'ارزش سرنخ',
                    'sales-person'        => 'کارشناس فروش',
                    'source'              => 'منبع',
                    'title'               => 'عنوان',
                    'tags'                => 'برچسب‌ها',
                    'expected-close-date' => 'تاریخ بسته شدن مورد انتظار',
                    'created-at'          => 'تاریخ ایجاد',
                ],

                'toolbar' => [
                    'search' => [
                        'title' => 'جستجو',
                    ],

                    'filters' => [
                        'apply-filters' => 'اعمال فیلترها',
                        'clear-all'     => 'پاک کردن همه',
                        'filter'        => 'فیلتر',
                        'filters'       => 'فیلترها',
                        'select'        => 'انتخاب',
                    ],
                ],
            ],

            'view-switcher' => [
                'all-pipelines'       => 'تمام خطوط تولید',
                'create-new-pipeline' => 'ایجاد خط تولید جدید',
            ],
        ],

        'create' => [
            'title'          => 'ایجاد سرنخ',
            'save-btn'       => 'ذخیره',
            'details'        => 'جزئیات',
            'details-info'   => 'اطلاعات پایه سرنخ را وارد کنید',
            'contact-person' => 'شخص تماس',
            'contact-info'   => 'اطلاعات درباره شخص تماس',
            'products'       => 'محصولات',
            'products-info'  => 'اطلاعات درباره محصولات',
        ],

        'edit' => [
            'title'          => 'ویرایش سرنخ',
            'save-btn'       => 'ذخیره',
            'details'        => 'جزئیات',
            'details-info'   => 'اطلاعات پایه سرنخ را وارد کنید',
            'contact-person' => 'شخص تماس',
            'contact-info'   => 'اطلاعات درباره شخص تماس',
            'products'       => 'محصولات',
            'products-info'  => 'اطلاعات درباره محصولات',
        ],

        'common' => [
            'contact' => [
                'name'           => 'نام',
                'email'          => 'ایمیل',
                'contact-number' => 'شماره تماس',
                'organization'   => 'سازمان',
            ],

            'products' => [
                'product-name' => 'نام محصول',
                'quantity'     => 'تعداد',
                'price'        => 'قیمت',
                'amount'       => 'مقدار',
                'action'       => 'عملیات',
                'add-more'     => 'افزودن بیشتر',
                'total'        => 'جمع',
            ],
        ],

        'view' => [
            'title'       => 'سرنخ: :title',
            'rotten-days' => ':days روز',

            'tabs' => [
                'description' => 'توضیحات',
                'products'    => 'محصولات',
                'quotes'      => 'نقل‌قول‌ها',
            ],

            'attributes' => [
                'title' => 'درباره سرنخ',
            ],

            'quotes'=> [
                'subject'         => 'موضوع',
                'expired-at'      => 'تاریخ انقضا',
                'sub-total'       => 'جمع جزئی',
                'discount'        => 'تخفیف',
                'tax'             => 'مالیات',
                'adjustment'      => 'تنظیمات',
                'grand-total'     => 'جمع کل',
                'delete'          => 'حذف',
                'edit'            => 'ویرایش',
                'download'        => 'دانلود',
                'destroy-success' => 'پیشنهاد با موفقیت حذف شد.',
                'empty-title'     => 'هیچ پیشنهادی یافت نشد',
                'empty-info'      => 'هیچ پیشنهادی برای این سرنخ یافت نشد',
                'add-btn'         => 'افزودن پیشنهاد',
            ],

            'products' => [
                'product-name' => 'نام محصول',
                'quantity'     => 'تعداد',
                'price'        => 'قیمت',
                'amount'       => 'مقدار',
                'action'       => 'عملیات',
                'add-more'     => 'افزودن بیشتر',
                'total'        => 'جمع',
                'empty-title'  => 'هیچ محصولی یافت نشد',
                'empty-info'   => 'هیچ محصولی برای این سرنخ یافت نشد',
                'add-product'  => 'افزودن محصول',
            ],

            'persons' => [
                'title'     => 'درباره افراد',
                'job-title' => ':job_title در :organization',
            ],

            'stages' => [
                'won-lost'       => 'برد/باخت',
                'won'            => 'برد',
                'lost'           => 'باخت',
                'need-more-info' => 'نیاز به اطلاعات بیشتر',
                'closed-at'      => 'بسته شده در',
                'won-value'      => 'ارزش برد',
                'lost-reason'    => 'دلیل باخت',
                'save-btn'       => 'ذخیره',
            ],

            'tags' => [
                'create-success'  => 'برچسب با موفقیت ایجاد شد.',
                'destroy-success' => 'برچسب با موفقیت حذف شد.',
            ],
        ],
    ],

    'configuration' => [
        'index' => [
            'back'         => 'بازگشت',
            'save-btn'     => 'ذخیره پیکربندی',
            'save-success' => 'پیکربندی با موفقیت ذخیره شد.',
            'search'       => 'جستجو',
            'title'        => 'پیکربندی',

            'general'  => [
                'title'   => 'عمومی',
                'info'    => 'پیکربندی عمومی',

                'general' => [
                    'title'           => 'عمومی',
                    'info'            => 'تنظیمات عمومی خود را اینجا به‌روزرسانی کنید.',
                    'locale-settings' => [
                        'title'       => 'تنظیمات محلی',
                        'title-info'  => 'زبان استفاده‌شده در رابط کاربری را تعریف می‌کند، مانند عربی (ar)، انگلیسی (en)، اسپانیایی (es)، فارسی (fa) و ترکی (tr).',
                    ],
                ],
            ],
        ],
    ],

    'dashboard' => [
        'index' => [
            'title' => 'داشبورد',

            'revenue' => [
                'lost-revenue' => 'درآمد از دست رفته',
                'won-revenue'  => 'درآمد برنده',
            ],

            'over-all' => [
                'average-lead-value'    => 'میانگین ارزش لید',
                'total-leads'           => 'کل لیدها',
                'average-leads-per-day' => 'میانگین لیدها در روز',
                'total-quotations'      => 'کل نقل قول‌ها',
                'total-persons'         => 'کل افراد',
                'total-organizations'   => 'کل سازمان‌ها',
            ],

            'total-leads' => [
                'title' => 'لیدها',
                'total' => 'کل لیدها',
                'won'   => 'لیدهای برنده',
                'lost'  => 'لیدهای از دست رفته',
            ],

            'revenue-by-sources' => [
                'title'       => 'درآمد بر اساس منابع',
                'empty-title' => 'هیچ داده‌ای موجود نیست',
                'empty-info'  => 'داده‌ای برای بازه زمانی انتخاب شده وجود ندارد',
            ],

            'revenue-by-types' => [
                'title'       => 'درآمد بر اساس انواع',
                'empty-title' => 'هیچ داده‌ای موجود نیست',
                'empty-info'  => 'داده‌ای برای بازه زمانی انتخاب شده وجود ندارد',
            ],

            'top-selling-products' => [
                'title'       => 'محصولات برتر',
                'empty-title' => 'هیچ محصولی پیدا نشد',
                'empty-info'  => 'محصولی برای بازه زمانی انتخاب شده موجود نیست',
            ],

            'top-persons' => [
                'title'       => 'افراد برتر',
                'empty-title' => 'هیچ فردی پیدا نشد',
                'empty-info'  => 'فردی برای بازه زمانی انتخاب شده موجود نیست',
            ],

            'open-leads-by-states' => [
                'title'       => 'لیدهای باز بر اساس وضعیت‌ها',
                'empty-title' => 'هیچ داده‌ای موجود نیست',
                'empty-info'  => 'داده‌ای برای بازه زمانی انتخاب شده وجود ندارد',
            ],
        ],
    ],

    'layouts' => [
        'app-version'          => 'نسخه: :version',
        'dashboard'            => 'داشبورد',
        'leads'                => 'لیدها',
        'quotes'               => 'نقل قول‌ها',
        'quote'                => 'نقل قول',
        'mail'                 => [
            'title'   => 'ایمیل',
            'compose' => 'تدوین',
            'inbox'   => 'صندوق ورودی',
            'draft'   => 'پیش‌نویس',
            'outbox'  => 'صندوق خروجی',
            'sent'    => 'ارسال شده',
            'trash'   => 'زباله‌دان',
            'setting' => 'تنظیمات',
        ],
        'activities'           => 'فعالیت‌ها',
        'contacts'             => 'مخاطبین',
        'persons'              => 'افراد',
        'person'               => 'فرد',
        'organizations'        => 'سازمان‌ها',
        'organization'         => 'سازمان',
        'products'             => 'محصولات',
        'product'              => 'محصول',
        'settings'             => 'تنظیمات',
        'user'                 => 'کاربر',
        'user-info'            => 'مدیریت همه کاربران و مجوزهای آنها در CRM، آنچه که اجازه دارند انجام دهند.',
        'groups'               => 'گروه‌ها',
        'groups-info'          => 'اضافه، ویرایش یا حذف گروه‌ها از CRM',
        'roles'                => 'نقش‌ها',
        'role'                 => 'نقش',
        'roles-info'           => 'اضافه، ویرایش یا حذف نقش‌ها از CRM',
        'users'                => 'کاربران',
        'users-info'           => 'اضافه، ویرایش یا حذف کاربران از CRM',
        'lead'                 => 'لید',
        'lead-info'            => 'مدیریت همه تنظیمات مربوط به لیدها در CRM',
        'pipelines'            => 'پایپ‌لاین‌ها',
        'pipelines-info'       => 'اضافه، ویرایش یا حذف پایپ‌لاین‌ها از CRM',
        'sources'              => 'منابع',
        'sources-info'         => 'اضافه، ویرایش یا حذف منابع از CRM',
        'types'                => 'انواع',
        'types-info'           => 'اضافه، ویرایش یا حذف انواع از CRM',
        'automation'           => 'اتوماسیون',
        'automation-info'      => 'مدیریت همه تنظیمات مربوط به اتوماسیون در CRM',
        'attributes'           => 'ویژگی‌ها',
        'attribute'            => 'ویژگی',
        'attributes-info'      => 'اضافه، ویرایش یا حذف ویژگی‌ها از CRM',
        'email-templates'      => 'قالب‌های ایمیل',
        'email'                => 'ایمیل',
        'email-templates-info' => 'اضافه، ویرایش یا حذف قالب‌های ایمیل از CRM',
        'events'               => 'رویدادها',
        'events-info'          => 'افزودن، ویرایش یا حذف رویدادها از CRM',
        'campaigns'            => 'کمپین‌ها',
        'campaigns-info'       => 'افزودن، ویرایش یا حذف کمپین‌ها از CRM',
        'workflows'            => 'فرایندها',
        'workflows-info'       => 'اضافه، ویرایش یا حذف فرایندها از CRM',
        'webhooks'             => 'وب‌هوک‌ها',
        'webhooks-info'        => 'افزودن، ویرایش یا حذف وب‌هوک‌ها از CRM',
        'other-settings'       => 'تنظیمات دیگر',
        'other-settings-info'  => 'مدیریت همه تنظیمات اضافی در CRM',
        'tags'                 => 'برچسب‌ها',
        'tags-info'            => 'اضافه، ویرایش یا حذف برچسب‌ها از CRM',
        'my-account'           => 'حساب من',
        'sign-out'             => 'خروج',
        'back'                 => 'برگشت',
        'name'                 => 'نام',
        'configuration'        => 'پیکربندی',
        'activities'           => 'فعالیت‌ها',
        'howdy'                => 'سلام!',
        'warehouses'           => 'انبارها',
        'warehouse'            => 'انبار',
        'warehouses-info'      => 'اضافه، ویرایش یا حذف انبارها از CRM',
    ],

    'user' => [
        'account' => [
            'name'                  => 'نام',
            'email'                 => 'ایمیل',
            'password'              => 'رمز عبور',
            'my_account'            => 'حساب من',
            'update_details'        => 'بروزرسانی جزئیات',
            'current_password'      => 'رمز عبور فعلی',
            'confirm_password'      => 'تأیید رمز عبور',
            'password-match'        => 'رمز عبور فعلی مطابقت ندارد.',
            'account-save'          => 'تغییرات حساب با موفقیت ذخیره شد.',
            'permission-denied'     => 'دسترسی مجاز نیست',
            'remove-image'          => 'حذف تصویر',
            'upload_image_pix'      => 'بارگذاری تصویر پروفایل (100px x 100px)',
            'upload_image_format'   => 'در فرمت PNG یا JPG',
            'image_upload_message'  => 'فقط تصاویر (.jpeg, .jpg, .png, ..) مجاز هستند.',
        ],
    ],

    'emails' => [
        'common' => [
            'dear'   => 'عزیز :name',
            'cheers' => 'با احترام،</br>تیم :app_name',

            'user' => [
                'dear'           => 'سلام :username',
                'create-subject' => 'شما به عنوان عضو اضافه شدید.',
                'create-body'    => 'تبریک می‌گوییم! شما اکنون عضو تیم ما هستید.',

                'forget-password' => [
                    'subject'           => 'بازنشانی رمز عبور مشتری',
                    'dear'              => 'سلام :username',
                    'reset-password'    => 'بازنشانی رمز عبور',
                    'info'              => 'شما این ایمیل را دریافت کرده‌اید زیرا ما درخواست بازنشانی رمز عبور برای حساب شما دریافت کرده‌ایم',
                    'final-summary'     => 'اگر درخواست بازنشانی رمز عبور نکرده‌اید، نیازی به انجام اقدام دیگری نیست',
                    'thanks'            => 'متشکریم!',
                ],
            ],
        ],
    ],

    'errors' => [
        'dashboard' => 'داشبورد',
        'go-back'   => 'بازگشت',
        'support'   => 'اگر مشکل ادامه داشت، برای کمک با ما از طریق <a href=":link" class=":class">:email</a> تماس بگیرید.',

        '404' => [
            'description' => 'اوه! به نظر می‌رسد صفحه‌ای که دنبال آن بودید، در دسترس نیست. نتوانستیم چیزی که دنبالش بودید را پیدا کنیم.',
            'title'       => '404 صفحه پیدا نشد',
        ],

        '401' => [
            'description' => 'اوه! به نظر می‌رسد که شما مجاز به دسترسی به این صفحه نیستید. شما مجوزهای لازم را ندارید.',
            'title'       => '401 مجاز نیست',
        ],

        '403' => [
            'description' => 'اوه! این صفحه ممنوع است. به نظر می‌رسد شما مجوزهای لازم برای مشاهده این محتوا را ندارید.',
            'title'       => '403 ممنوع',
        ],

        '500' => [
            'description' => 'اوه! مشکلی پیش آمده است. به نظر می‌رسد مشکلی در بارگذاری صفحه مورد نظر شما وجود دارد.',
            'title'       => '500 خطای سرور داخلی',
        ],

        '503' => [
            'description' => 'اوه! به نظر می‌رسد که به طور موقت برای نگهداری آفلاین هستیم. لطفاً بعداً دوباره بررسی کنید.',
            'title'       => '503 سرویس در دسترس نیست',
        ],
    ],
];
