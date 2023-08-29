<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            /* REGOLE PER I CAMPI DEL FORM */
            'title' => 'required|max:50',
            'image' => 'image|max:250',
            'type_id' => 'required|exists:types,id',
            'tecnologies_id' => 'exists:tecnologies.id'
        ];
    }
    /* Funzione per gestire i messaggi di errore in ITA */
    public function messages()
    {
        return [
            /* MESSAGGI DI ERRORE DEL TITOLO */
            'title.required' => 'Il titolo è obbligatorio',
            'title.max'  => "Il titolo deve avere meno di :max caratteri.",
            /* MESSAGGI DI ERRORE PER L'IMMAGINE */
            'image.image'  => "Il file deve avere una delle seguenti estensioni: jpg, jpeg, png, webp",
            'image.max'  => "L'indirizzo dell'immagine deve avere al massimo :max caratteri.",
            /* MESSAGGI DI ERRORE PER LA TIPOLOGIA */
            'type_id.required' => "Devi selezionare una categoria",
            'type_id.exists' => "Categoria selezionata non valida",
            /* MESSAGGI DI ERRORE PER LA TECNOLOGIA */
            'tecnologies_id.exists' => "Selezionare almeno una tecnologia collegata al progetto"
        ];
    }
}
