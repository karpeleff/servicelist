<?php
/**
 * Created by PhpStorm.
 * User: Алексей
 * Date: 09.04.2019
 * Time: 20:18
 *   // dd($this->request);

//$item = Component::
$item = Component::where('item', $this->request->item)->first();//проверяем наличие в базе

if ($item == null)//

{
$validator = Validator::make($this->request->all(), [
'item' => 'required',
'storage' => 'required',
]);


if ($validator->fails()) {
return redirect('storecomponent')
->withErrors($validator);
// ->withInput();
}
else
{
$record = new Component;
$record->type = $this->request->type;
$record->item = $this->request->item;
$record->datasheet = $this->request->datasheet;
$record->storage = $this->request->storage;
$record->count = $this->request->count;
$record->save();

// return $this->index();

} else {
$count = $item->count + $this->request->count;
$record = Component::find($item->id);
$record->count = $count;
$record->save();
}

return $this->index();
}