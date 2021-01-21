<?  /* Определить есть ли товары в каталоге */
$activeElements = CIBlockSection::GetSectionElementsCount($arResult["ID"], array("CNT_ACTIVE" => "Y"));
if ($activeElements == 0) {
    echo "Товаров не найдено!";
}
