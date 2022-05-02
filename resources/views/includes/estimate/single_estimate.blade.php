<div data-spollers data-one-spoller class="estimates-accordion">
    @foreach($estimates as $estimate)
        <div class="single-estimate-item">
            <div class="single-estimate-header">
                <div class="single-estimate__left">
                    <div class="single-estimate-check">
                        <label class="label">
                            <input id="chbox{{ $estimate->id }}" name="checkbox" type="checkbox" class="checkbox">
                            <span class="estimate-fake"></span>
                        </label>
                    </div>
                    <div class="single-estimate-name">
                        {{ $estimate->name }}<span class="estimate-id">{{ $estimate->id }}</span>
                        @if ($estimate->created_at!= null)
                            от {{ $estimate->created_at->format('d.m.Y') }}
                        @endif
                    </div>
                </div>
                <div class="single-estimate__right">
                    <div class="single-estimate-price">
                        @php
                            $sum = 0;

                            foreach($estimate->goods as $good)
                                 $sum+=$good->pivot->number_of_goods * $good->price;
                        @endphp
                        {{ number_format($sum,0,'',' ') }} ₽
                    </div>
                    <div class="dropdown">
                        <button class="single-estimate-dots" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false"></button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="{{ route('estimate.edit', $estimate) }}">Редактировать</a></li>
                            <li><a target="_blank" class="dropdown-item" href="{{ route('pdf.preview',$estimate->id) }}">Скачать в PDF</a></li>
                            <li>
                                <input onclick="double({{ $estimate->id }})" class="dropdown-item double-item" type="submit" value="Дублировать">
                            </li>
                            <li>
                                <input onclick="deleteOne({{ $estimate->id }})" type="submit" value="Удалить" class="dropdown-item delete-item">
                            </li>
                        </ul>
                    </div>
                </div>


            </div>


            <button id="dropdownBtn{{ $estimate->id }}" tabindex="-1" type="button"
                    onclick="dropDown({{ $estimate->id }})" class="single-estimate__title">
            </button>

            <div class="single-estimate-body">
                @foreach($estimate->goods as $good)
                    <div class="single-estimate-body__good">
                        <div class="single-estimate-body__left">
                            <div class="single-estimate-body__thumb">
                                <img src="/images/{{ $good->img }}" alt="">
                            </div>
                            <div class="single-estimate-body__info">
                                <p class="single-estimate-body__title">{{ $good->name }}</p>
                                <p class="single-estimate-body__price">{{ number_format($good->price,0,'',' ') }} ₽ за
                                    шт.</p>
                            </div>
                        </div>
                        <div class="single-estimate-body__right">
                            <div class="single-estimate-total-price">
                                <p class="single-estimate-total-price__price">
                                    {{ number_format($good->pivot->number_of_goods * $good->price,0,'',' ') }} ₽
                                </p>
                                <p class="single-estimate-total-price__number">
                                    За {{ number_format($good->pivot->number_of_goods,0,'',' ') }} шт.
                                </p>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>
<div class="estimates-pagination">
    {{ $estimates->links() }}
</div>
