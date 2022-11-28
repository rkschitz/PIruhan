from msilib.schema import Icon
from turtle import color
import folium

mapa = folium.Map(location = [-26.3051, -48.8461], zoom_start = 12 ) 

tooltip = "Alerta"

folium.Marker([-26.3051, -48.8461], popup="Alerta de ataques", icon=folium.Icon(color="red", icon="info-sign")).add_to(mapa)
folium.Marker([-26.286520, -48.843258], popup="Alerta de ataques", icon=folium.Icon(color="red", icon="info-sign")).add_to(mapa)
folium.Marker([-26.289028, -48.900459], popup="Alerta de ataques", icon=folium.Icon(color="red", icon="info-sign")).add_to(mapa)
folium.Marker([-26.337793, -48.838545], popup="Alerta de ataques", icon=folium.Icon(color="red", icon="info-sign")).add_to(mapa)
folium.Marker([-26.336730, -48.811231], popup="Alerta de ataques", icon=folium.Icon(color="red", icon="info-sign")).add_to(mapa)
folium.Marker([-26.269079, -48.869703], popup="Alerta de ataques", icon=folium.Icon(color="red", icon="info-sign")).add_to(mapa)
folium.Marker([-26.239347, -48.816474], popup="Alerta de ataques", icon=folium.Icon(color="red", icon="info-sign")).add_to(mapa)
folium.Marker([-26.278801, -48.802890], popup="Alerta de ataques", icon=folium.Icon(color="red", icon="info-sign")).add_to(mapa)
folium.Marker([-26.331592, -48.813102], popup="Alerta de ataques", icon=folium.Icon(color="red", icon="info-sign")).add_to(mapa)
folium.Marker([-26.289584, -48.771896], popup="Alerta de ataques", icon=folium.Icon(color="red", icon="info-sign")).add_to(mapa)
folium.Marker([-26.260891, -48.804811], popup="Alerta de ataques", icon=folium.Icon(color="red", icon="info-sign")).add_to(mapa)

mapa.save(" index.html " )

