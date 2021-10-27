<div>
    <form wire:submit.prevent="findStudent">
        <div class="payment__variants">

            <label class="payment__label" for="DNI">
                <input class="payment__radio" wire:model="document_type" id="DNI" type="radio" name="document_type"
                    value="DNI" />
                <span class="payment__in">
                    <span class="payment__tick"></span>
                    <span class="payment__desc">
                        <span class="payment__logo">
                            <img class="payment__pic payment__pic_black"
                                src="https://www.flaticon.es/premium-icon/icons/svg/3045/3045675.svg" alt="" />
                            <img class="payment__pic payment__pic_white"
                                src="https://www.flaticon.es/premium-icon/icons/svg/3045/3045675.svg" alt="" />
                        </span>
                        <span class="payment__info caption-sm">DNI</span>
                    </span>
                </span>
            </label>
            <label class="payment__label" for="CE">
                <input class="payment__radio" wire:model="document_type" id="CE" type="radio" name="document_type"
                    value="CE" />
                <span class="payment__in">
                    <span class="payment__tick"></span>
                    <span class="payment__desc">
                        <span class="payment__logo">
                            <img class="payment__pic"
                                src="https://www.flaticon.es/premium-icon/icons/svg/3045/3045675.svg" alt="" />
                        </span>
                        <span class="payment__info caption-sm">Carnet de Extrangeria</span>

                    </span>
                </span>
            </label>
        </div>

        <div class="payment__variants">
            <div class="payment__label">

                @error('document_type')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>


        <div class="payment__variants">
            <div class="payment__label">
                <div class="field__label">Numero de Documento</div>
                <div class="sorting__search">
                    <button class="sorting__open">
                        <svg class="icon icon-search">
                            <use xlink:href="{{ asset('frontend/img/sprite.svg#icon-search') }}"></use>
                        </svg>
                    </button>

                    {{ Form::text('document_number', null, ['class' => 'sorting__input', 'autocomplete' => 'off', 'maxlength' => '10', 'wire:model' => 'document_number', 'placeholder' => 'N° Documento']) }}
                </div>
            </div>
        </div>

        <div class="payment__variants">
            <div class="payment__label">

                @error('document_number')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="payment__variants mt-5">
            <div class="payment__label">

                <div class="sorting__search">
                    <button type="submit" class="products__btn btn btn_purple">Buscar </button>
                    <button type="reset" class="products__btn btn btn_gray">Limpiar</button>
                </div>
            </div>
        </div>
    </form>

    @if ($students != null)
        <div class="page__stat page__stat_sm mt-10" id="Data">
            {{-- <div class="page__title h6">Resultados</div> --}}
            <div class="sorting mobile-show">
                <div class="sorting__row">
                    <div class="sorting__col">

                    </div>
                    <div class="sorting__col">
                        <div class="sorting__line">

                            <div class="sorting__actions"><button class="sorting__action"><svg class="icon icon-print">
                                        <use xlink:href="{{ asset('frontend/img/sprite.svg#icon-print') }}"></use>
                                    </svg></button><button class="sorting__action"><svg class="icon icon-download-fat">
                                        <use xlink:href="{{ asset('frontend/img/sprite.svg#icon-download-fat') }}">
                                        </use>
                                    </svg></button></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sorting mobile-hide">
                <div class="sorting__actions"><button class="sorting__action"><svg class="icon icon-print">
                            <use xlink:href="{{ asset('frontend/img/sprite.svg#icon-print') }}"></use>
                        </svg></button><button class="sorting__action"><svg class="icon icon-download-fat">
                            <use xlink:href="{{ asset('frontend/img/sprite.svg#icon-download-fat') }}"></use>
                        </svg></button></div>
            </div>
            <div class="products products_statement">
                <div class="products__title h6 mobile-hide">Resultados</div>
                <div class="products__info caption mobile-hide">Please note: Transactions are based Time in California,
                    USA.</div>
                <div class="products__table">
                    <div class="products__row products__row_head">
                        <div class="products__cell"></div>
                        <div class="products__cell">Nombre Completo</div>
                        <div class="products__cell">Titulo</div>
                        <div class="products__cell">Institución</div>
                        <div class="products__cell">Fecha de Emisión</div>
                    </div>
                    @forelse ($students as $student)
                    <div class="products__row">
                        <div class="products__cell">{{-- <label class="checkbox"><input class="checkbox__input"
                                    type="checkbox"><span class="checkbox__in"><span
                                        class="checkbox__tick"></span></span></label> --}}</div>
                        <div class="products__cell color-gray">{{ $student->fullname }}</div>
                        {{-- <div class="products__cell">{{ $student->document_number }}</div> --}}
                        <div class="products__cell">{{ $student->title_name }} -
                            {{ $student->title_level }}</div>
                        <div class="products__cell color-red">{{ $student->institute->name }}</div>
                        <div class="products__cell text-right">
                            <div class="products__status caption bg-green">{{ $student->title_date->format('d/m/Y') }}</div>
                        </div>
                    </div>
                    <div class="products__body">
                        <div class="products__bg bg-green"></div>
                        <div class="products__line">
                            <div class="products__col color-gray">17 Aug 2020</div>
                            <div class="products__col">{{ $student->title_name }} -
                                {{ $student->title_level }}</div>
                            <div class="products__col color-red"> {{ $student->institute->name }}</div>
                        </div>
                    </div>
                    @empty
                        
                    @endforelse
                    



                </div>

            </div>
        </div>

        <div class="page__content mt-10">
            <div class="page__stat">
                <div class="page__title h6">Resultados</div>
                <div class="sorting">
                    <div class="sorting__row">
                        <div class="sorting__col">
                            <div class="sorting__line">

                                <div class="sorting__actions">
                                    <button class="sorting__action">
                                        <svg class="icon icon-edit">
                                            <use xlink:href="{{ asset('frontend/img/sprite.svg#icon-edit') }}"></use>
                                        </svg>
                                    </button>
                                    <button class="sorting__action">
                                        <svg class="icon icon-box">
                                            <use xlink:href="{{ asset('frontend/img/sprite.svg#icon-box') }}""></use>
                  </svg>
               </button>
            </div>
         </div>
        </div>
      </div>
    </div>
    <div class=" products products_history">
                                                <div class="products__table">
                                                    <div class="products__row products__row_head">
                                                        <div class="products__cell"><label class="checkbox">
                                                                <input class="checkbox__input" type="checkbox">
                                                                <span class="checkbox__in">
                                                                    <span class="checkbox__tick">
                                                                    </span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                        <div class="products__cell">Nombre Completo</div>
                                                        <div class="products__cell">Titulo</div>
                                                        <div class="products__cell">Institución</div>
                                                        <div class="products__cell">Fecha de Emisión</div>
                                                        {{-- <div class="products__cell">Fees</div> --}}
                                                    </div>
                                                    @forelse ($students as $student)
                                                        <div class="products__row">
                                                            <div class="products__cell">
                                                                <label class="checkbox">
                                                                    <input class="checkbox__input" type="checkbox">
                                                                    <span class="checkbox__in">
                                                                        <span class="checkbox__tick">
                                                                        </span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="products__cell">
                                                                <div class="products__price title">
                                                                    {{ $student->fullname }}</div>
                                                                <div class="products__transaction caption color-gray">
                                                                    {{ $student->document_number }}</div>
                                                            </div>
                                                            <div class="products__cell">{{ $student->title_name }} -
                                                                {{ $student->title_level }}</div>
                                                            <div class="products__cell">
                                                                <div class="products__status caption bg-green">
                                                                    {{ $student->institute->name }}</div>
                                                            </div>
                                                            <div class="products__cell color-gray">
                                                                {{ $student->title_date->format('d/m/Y') }}</div>
                                                            {{-- <div class="products__cell color-red">$3.49</div> --}}
                                                        </div>
                                                        <div class="products__body">
                                                            <div class="products__bg bg-green"></div>
                                                            <div class="products__line">
                                                                <div class="products__col color-gray">
                                                                    {{ $student->title_name }} -
                                                                    {{ $student->title_level }}</div>
                                                                <div class="products__col">
                                                                    {{ $student->institute->name }}</div>
                                                                {{-- <div class="products__col color-red">$3.49</div> --}}
                                                            </div>
                                                        </div>
                                                    @empty
                                                        <div class="products__row">

                                                            <div class="products__cell">

                                                            </div>
                                                            <div class="products__cell">
                                                                <div class="slider__title h5">
                                                                    No se encontraron resultados
                                                                </div>
                                                            </div>
                                                            <div class="products__cell">

                                                            </div>
                                                            <div class="products__cell">

                                                            </div>
                                                            <div class="products__cell">

                                                            </div>
                                                        </div>

                                                    @endforelse
                                                </div>
                                </div>
                            </div>
                        </div>
    @endif

    @section('page-scripts')
    <script>
        const lastRecord = document.getElementById('Data');
        const options = {
            root: null,
            threshold: 1,
            rootMargin: '0px'
        }
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    @this.loadMore()
                }
            });
        });
        observer.observe(lastRecord);
    </script>
    @endsection

</div>
