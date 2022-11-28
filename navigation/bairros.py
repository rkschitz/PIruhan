import folium
from msilib.schema import Icon
from turtle import color

mapa = folium.Map(location = [-26.3051, -48.8461], zoom_start = 12 ) 

tooltip = "Alerta"

#cor1 = #E6001C, cor2 = #CD0018, cor3 = #B60015 cor4 = #89010F, cor5 = #72020C, cor6 = #4B0206, cor7 = #0D0101

folium.Circle(radius=1000, location=[-26.212024, -48.822281], popup="nota 3", color="#0D0101", fill=True,).add_to(mapa) #Jardim Paraiso
folium.Circle(radius=800, location=[-26.324341, -48.908623], popup="nota 3", color="#4B0206", fill=True,).add_to(mapa) #Morro do Meio
folium.Circle(radius=1300, location=[-26.298657, -48.822451], popup="nota 6", color="#89010F", fill=True,).add_to(mapa) #Boa Vista
folium.Circle(radius=400, location=[-26.244205, -48.810233], popup="nota 3", color="#4B0206", fill=True,).add_to(mapa) #Aventureiro
folium.Circle(radius=1200, location=[-26.263659, -48.807010], popup="nota 3", color="#4B0206", fill=True,).add_to(mapa) #Jardim Iririu
folium.Circle(radius=1300, location=[-26.347808, -48.779518], popup="nota 4", color="#72020C", fill=True,).add_to(mapa) #Paranaguamirim
folium.Circle(radius=1200, location=[-26.283535, -48.779739], popup="nota 5", color="#72020C", fill=True,).add_to(mapa) #Espinheiros
folium.Circle(radius=1200, location=[-26.279808, -48.801613], popup="nota 4", color="#72020C", fill=True,).add_to(mapa) #Comasa
folium.Circle(radius=1200, location=[-26.261179, -48.841811], popup="nota 4", color="#72020C", fill=True,).add_to(mapa) #Bom Retiro = Nova Brasilia
folium.Circle(radius=1100, location=[-26.290569, -48.853684], popup="nota 10", color="#E6001C", fill=True,).add_to(mapa) #America = Floresta
folium.Circle(radius=1200, location=[-26.340759, -48.870900], popup="nota 7", color="#89010F", fill=True,).add_to(mapa) #Nova Brasília
folium.Circle(radius=800, location=[-26.334680, -48.849696], popup="nota 7", color="#E60800", fill=True,).add_to(mapa) #Floresta
folium.Circle(radius=700, location=[-26.333383, -48.829817], popup="nota 6", color="#E60800", fill=True,).add_to(mapa) #Itaum
folium.Circle(radius=700, location=[-26.348983, -48.830657], popup="nota 5", color="#E60800", fill=True,).add_to(mapa) #Petrópoles
folium.Circle(radius=1800, location=[-26.411333, -48.795449], popup="nota 5", color="#72020C", fill=True,).add_to(mapa) #Itinga
folium.Circle(radius=1200, location=[-26.382917, -48.825690], popup="nota 5", color="#72020C", fill=True,).add_to(mapa) #Itinga 2
folium.Circle(radius=600, location=[-26.368960, -48.839359], popup="nota 3.5", color="#E60800", fill=True,).add_to(mapa) #Profipo
folium.Circle(radius=600, location=[-26.365724, -48.852571], popup="nota 8", color="#CD0018", fill=True,).add_to(mapa) #Santa Catarina
folium.Circle(radius=500, location=[-26.363228, -48.829078], popup="nota 7", color="#72020C", fill=True,).add_to(mapa) #Boehmerwald
folium.Circle(radius=900, location=[-26.347164, -48.809755], popup="nota 7", color="#72020C", fill=True,).add_to(mapa) #Parque Guarani
folium.Circle(radius=600, location=[-26.332792, -48.805232], popup="nota 5", color="#89010F", fill=True,).add_to(mapa) #Jarivatuba
folium.Circle(radius=500, location=[-26.326377, -48.791790], popup="nota 6", color="#72020C", fill=True,).add_to(mapa) #Ulices Guimarães
folium.Circle(radius=500, location=[-26.321767, -48.801658], popup="nota 8", color="#CD0018", fill=True,).add_to(mapa) #Ademar Garcia
folium.Circle(radius=500, location=[-26.324206, -48.815570], popup="nota 8", color="#CD0018", fill=True,).add_to(mapa) #Fatima
folium.Circle(radius=500, location=[-26.322200, -48.828861], popup="nota 6", color="#72020C", fill=True,).add_to(mapa) #Guanabara
folium.Circle(radius=500, location=[-26.314671, -48.838401], popup="nota 9", color="#CD0018", fill=True,).add_to(mapa) #Bucarein
folium.Circle(radius=500, location=[-26.318376, -48.856393], popup="nota 10", color="#E6001C", fill=True,).add_to(mapa) #Atiradores
folium.Circle(radius=550, location=[-26.347128, -48.809703], popup="nota 7", color="#72020C", fill=True,).add_to(mapa) #João Costa
folium.Circle(radius=700, location=[-26.313239, -48.883414], popup="nota 10", color="#E6001C", fill=True,).add_to(mapa) #São Marcos
folium.Circle(radius=500, location=[-26.295940, -48.873812], popup="nota 9", color="#CD0018", fill=True,).add_to(mapa) #Glória
folium.Circle(radius=500, location=[-26.318647, -48.856181], popup="nota 10", color="#E6001C", fill=True,).add_to(mapa) #Anita Garibaldi
folium.Circle(radius=600, location=[-26.286035, -48.838580], popup="nota 9", color="CD0018", fill=True,).add_to(mapa) #Saguaçu
folium.Circle(radius=700, location=[-26.275244, -48.823764], popup="nota 6", color="#72020C", fill=True,).add_to(mapa) #Iririu
folium.Circle(radius=800, location=[-26.261029, -48.841887], popup="nota 8", color="#CD0018", fill=True,).add_to(mapa) #Bom Retiro
folium.Circle(radius=800, location=[-26.269380, -48.856355], popup="nota 8", color="#CD0018", fill=True,).add_to(mapa) #Santo Antonio
folium.Circle(radius=1100, location=[-26.274604, -48.879998], popup="nota 8", color="#CD0018", fill=True,).add_to(mapa) #Costa e Silva
folium.Circle(radius=1400, location=[-26.284553, -48.905632], popup="nota 6", color="#72020C", fill=True,).add_to(mapa) #Vila Nova
folium.Circle(radius=1000, location=[-26.238651, -48.840941], popup="nota 7", color="#72020C", fill=True,).add_to(mapa) #Jardim Sofia
folium.Circle(radius=1400, location=[-26.213104, -48.907975], popup="Zona de guerra", color="#E60800", fill=True,).add_to(mapa) #Pirabeiraba


mapa.save(" index.html " )