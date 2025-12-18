//servicio para obtener la informacion de la api
export const fetchCharacters = async () => {
    const response = await axios.get('https://dragonball-api.com/api/characters/')
    console.log(response);
    
    return response.data;
}