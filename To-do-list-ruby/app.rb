require "sinatra"
require "sinatra/activerecord"
require "shotgun"

set :database, "sqlite3:todo.sqlite3"

class Donnees < ActiveRecord::Base
end

get '/' do
	redirect '/index'
end

get '/index' do
	@datas = Donnees.all
	erb :index
end

post '/index' do
	datas = Donnees.create(params)
	redirect '/'
end

put '/index/:id' do
	@datas = Donnees.find(params[:id])
	@datas.tache = params[:tache]
	@datas.save
	redirect '/'
end

delete '/index/:id' do
	@datas = Donnees.find(params[:id]).destroy
    redirect '/'
end