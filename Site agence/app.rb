require "sinatra"
require "sinatra/activerecord"
require "shotgun"

set :database, "sqlite3:todo.sqlite3"


class Donnees < ActiveRecord::Base
end

get '/index' do
      erb :index
end

get '/formulaire' do
	erb :formulaire
end

get '/confirmation' do
	erb :confirmation
end

post '/confirmation' do
	erb :confirmation
end

get '/liste_inscription' do
	@datas = Donnees.all
	erb :liste_inscription
end

post '/liste_inscription' do
	Donnees.create(params)
	@datas = Donnees.all
	erb :liste_inscription
end
