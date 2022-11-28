from msilib.schema import Icon
from turtle import color
import folium

mapa = folium.Map(location = [-26.3051, -48.8461], zoom_start = 12 ) 

tooltip = "Alerta"

folium.Marker([-26.291168146927028, -48.828173191493285], popup="Caminhada segura", icon=folium.Icon(color="blue", icon="info-sign")).add_to(mapa)
folium.Marker([-26.259980, -48.866187], popup="Caminhada segura", icon=folium.Icon(color="blue", icon="info-sign")).add_to(mapa)
folium.Marker([-26.319111, -48.842435], popup="Caminhada segura", icon=folium.Icon(color="blue", icon="info-sign")).add_to(mapa)
folium.Marker([-26.308937, -48.850754], popup="Caminhada segura", icon=folium.Icon(color="blue", icon="info-sign")).add_to(mapa)

mapa.save(" index.html " )